<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Payment;
use App\Imports\PaymentsImport;

class PaymentController extends Controller
{
    public function import(Request $request)
    {
         // Validate file input
         $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);
        Excel::import(new PaymentsImport, $request->file('file'));

        return back()->with('success', 'Payments imported successfully.');
    }


    public function updateFinalPayableAmount()
    {
        // DB::table('payments')
        //     ->update([
        //         'Final_Payable_Amount' => DB::raw('TOTAL_PAY - TDS_Amount')
        //     ]);

                    // Fetch all records from the database
        $payments = Payment::all();

        // Return the view with the payments data
        return view('payments.index', compact('payments'));
    }


}
