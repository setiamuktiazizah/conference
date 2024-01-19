<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Payment;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    //
    public function createPayment(Request $request)
    {
        // Validate the request data

        // Create a new payment record
        $payment = Payment::create([
            'user_id' => $request->user_id,
            'price_conference_id' => $request->price_conference_id,
            'conference_id' => $request->conference_id,
            'value' => $request->value,
            'payment_receipt' => $request->payment_receipt,
            'payment_date' => Carbon::now(), // or use $request->payment_date
            'status' => 'pending', // Set initial status
            'created_by' => auth()->id(),
            'updated_by' => null,
        ]);

        // // Set up Midtrans configuration
        // Config::$serverKey = 'your-midtrans-server-key';
        // Config::$clientKey = 'your-midtrans-client-key';
        // Config::$isProduction = false;

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        // Create payment token using Midtrans Snap
        $params = [
            'transaction_details' => [
                'order_id' => $payment->id,
                'gross_amount' => $payment->value,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        // Redirect to Midtrans payment page
        return redirect()->away(Snap::getSnapUrl($snapToken));
    }

    public function handleCallback(Request $request)
    {
        // Handle callback from Midtrans (you might want to verify the callback)

        // Update payment status based on Midtrans callback
        $paymentId = $request->order_id;
        $status = $request->transaction_status;

        $payment = Payment::find($paymentId);
        $payment->status = $status;
        $payment->save();

        // Perform additional actions based on the payment status

        return response()->json(['message' => 'Callback handled successfully']);
    }
}
