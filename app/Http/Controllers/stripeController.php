<?php
namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\Webhook;
use Illuminate\Http\Request;
use App\Http\Controllers\serviceSalesFlow;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

class stripeController extends Controller
{
    public function handlePayment(Request $request)

    {
        $uuid = Str::uuid();
        cache(['invoiceData_' . $uuid => $request->invoiceDataForSession], 60);
        // session()->put('invoiceDataForSession', $request->invoiceDataForSession);
        Stripe::setApiKey(config('services.stripe.secret'));
        $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'pkr',
                'product_data' => [
                    'name' => 'Your Product Name',
                ],
                'unit_amount' => intval($request->amount),
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => url('/success'),
        'cancel_url' => url('/cancelled'),
        'metadata' => [
            'uuid' => $uuid,
        ],
    ]);
    
    return response()->json(['id' => $session->id, 'laravelSessionID'=>session()->getID()]);

    }
    
    public function success(Request $request){
        $cachedData = Cache::get('session_data');
        if ($cachedData!=null) {
            $invoiceInfo = array_slice($cachedData, 1, 31, true);
            // $existingSessionData = session()->all();
            // dd($existingSessionData);
            // $mergedData = array_merge($existingSessionData, $invoiceInfo);
            // Session::put($mergedData);
            session(['invoiceDetails'=>$invoiceInfo]);
        }
        $invoiceData = session('invoiceDetails');
         return view('orderPlacedSuccessfully', ['invoiceData' => $invoiceData ]);

        
    }
    public function cancelled(){
        echo"payment cancelled";

    }

    public function handleWebHook(Request $request){
        try {
            $payload = $request->getContent();
            $sigHeader = $request->header('Stripe-Signature');
            $endpointSecret = config('services.stripe.webhook_secret');
    
            $event = Webhook::constructEvent($payload, $sigHeader, $endpointSecret);
            switch ($event->type) {
                case 'checkout.session.completed':
                    $uuid = $event->data->object->metadata->uuid;
                    // dd($laravelSessionID);
                    $invoiceData = cache('invoiceData_' . $uuid);
                    $salesFlow = new serviceSalesFlow();
                    $invoiceNumber = $salesFlow->insertinSalesforDelivery($invoiceData);
                    cache()->forget('invoiceData_' . $uuid);
                    return response()->json(['success' => true,'redirect' => url('/success')]);
                case 'payment_intent.payment_failed':
                    return response()->json(['success' => true, 'redirect' => url('/cancelled')]);
                default:
                return response()->json(['success' => true]);
            }
    
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

}
