<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;  
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = DB::table('payments')
            ->join('users', 'payments.user_id', '=', 'users.id')
            ->select('payments.*', 'users.name as user_name')
            ->get();
        
        return view('bendahara.paymentstatus', ['payments' => $payments]);
    }
    public static function getStatusColorClass($status)
    {
        switch ($status) {
            case 'Success':
                return 'status-success';
            case 'Pending':
                return 'status-pending';
            case 'Failed':
                return 'status-failed';
        }
    }
}
