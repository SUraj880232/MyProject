<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentCalculationController extends Controller
{
    public function calculateAndStore()
    {
        // Fetch data from the payments table
        $payments = DB::table('payments')->get();

        foreach ($payments as $payment) {
            // Calculate Final_Payable_Amount
            // $finalPayableAmount = $payment->TOTAL_PAY - $payment->TDS_Amount + $payment->RI_Incentive;
            $payment->rate = $payment->fat * 8.5;
            $payment->quantity = $payment->NETAMOUNT / $payment->rate;
            $payment->TOTAL_PAY = $payment->NETAMOUNT + $payment->PREVIOUS_BALANCE + $payment->RI_Incentive;
            $payment->Amount_Payable = $payment->TOTAL_PAY - $payment->Recovery_1 - $payment->Recovery_2;
            $payment->TDS_Amount = $payment->Amount_Payable * 0.10;
            $finalPayableAmount = $payment->TOTAL_PAY - $payment->TDS_Amount ;


            // Insert into the new table
            DB::table('cm_calculations')->insert([
                'fat_rate' => $payment->fat_rate,
                'rate' => $payment->rate,
                'quantity' => $payment->quantity,
                'NETAMOUNT' => $payment->NETAMOUNT,
                'PREVIOUS_BALANCE' => $payment->PREVIOUS_BALANCE,
                'RI_Incentive' => $payment->RI_Incentive,
                'TOTAL_PAY' => $payment->TOTAL_PAY,
                'Recovery_1' => $payment->Recovery_1,
                'Recovery_2' => $payment->Recovery_2,
                'Amount_Payable' => $payment->Amount_Payable,
                'TDS_Amount' => $payment->TDS_Amount,
                'Final_Payable_Amount' => $finalPayableAmount,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return response()->json(['message' => 'Calculations performed and stored successfully!']);
    }
}
