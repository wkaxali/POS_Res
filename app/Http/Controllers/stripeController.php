<?php
namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\Webhook;
use Illuminate\Http\Request;
use App\Http\Controllers\serviceSalesFlow;

class stripeController extends Controller
{
    public function handlePayment(Request $request)

    {
        session(['invoiceDataForSession' => $request->invoiceDataForSession]);
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
        'success_url' => url('/success') ,
        'cancel_url' => url('/cancelled'),
    ]);
    
    
    return response()->json(['id' => $session->id]);

    }
    
    public function success(){
        // dd(session()->get('invoiceDataForSession'));
        echo strval(session(['invoiceNumber']))," has been added!";
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
                    $sessionData = session()->get('invoiceDataForSession');
                    serviceSalesFlow::insertinSales($sessionData);


                    // Store order receipt in the database
                    // $invoiceData = session('invoiceDataForSession');
                    // OrderReceipt::create([
                    //     'payment_intent_id' => $paymentIntent->id,
                    //     'invoice_data' => $invoiceData,

                    // ]);


                    session()->forget('invoiceDataForSession');
                    return response()->json(['success' => true]);
                default:

                    return response()->json(['success' => true]);
            }
    
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

}
