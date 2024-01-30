<?php
namespace App\Http\Controllers;

use Stripe\Stripe;
use Illuminate\Http\Request;

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
                'unit_amount' => intval($request->amount), // Amount in smallest currency unit
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

        echo"payment Sucessfull";
    }
    public function cancelled(){
        echo"payment cancelled";

    }

}
