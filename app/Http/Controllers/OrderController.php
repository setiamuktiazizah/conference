<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Payment;
use Midtrans\Config;

class OrderController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // public function bundling()
    // {

    // }

    public function checkout($nib)
    {
        $user = User::where('nib', $nib)->first();
        $userName = $user->name;

        // Membuat variabel $receipt
        $receipt = $userName . '.pdf';


        $payment_data = [
            'user_id' => $user->id,
            'price_conference_id' => 2,
            'conference_id' => 2,
            'value' => 100,
            'payment_receipt' => $receipt,
            'payment_date' => now(),
            'status' => 'unpaid',
            'created_by' => 1,
            'updated_by' => 1,
        ];

        $payment = Payment::create($payment_data);

        // $snapData = [
        //     'id' => $payment->id,
        //     'value' => $payment->value,
        //     'name' => $user->name,
        //     'email' => $user->email,
        // ];

        // dd($user);
        // dd($request->all());
        // $request->request->add(['total_price' => $request->qty * 50000, 'status' => 'unpaid']);
        // $order = Order::create($request->all());

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $payment->id,
                'gross_amount' => $payment->value,
            ),
            'customer_details' => array(
                'name' => $user->name,
                'email' => $user->email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('user/checkout', compact('snapToken', 'payment', 'user'));
    }
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $order = Payment::find($request->order_id);
                $order->update(['status' => 'paid']);
            }
            if ($request->transaction_status == 'pending') {
                $order = Payment::find($request->order_id);
                $order->update(['status' => 'pending']);
            }
        }
    }
    public function invoice($id)
    {
        $payment = Payment::where('id', $id)->first();
        $id_user = $payment->user_id;
        $user = User::where('id', $id_user)->first();
        return view('user.invoice', compact('payment', 'user'));
    }
}
