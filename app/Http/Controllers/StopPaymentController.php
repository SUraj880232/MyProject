<?php

namespace App\Http\Controllers;

use App\Imports\StopPaymentImport;
use App\Models\StopPayment;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StopPaymentExport;


class StopPaymentController extends Controller
{
    public function index()
    {
        $stopPayments = StopPayment::all();
        return view('stop_payments.index', compact('stopPayments'));
    }

    public function import(Request $request)
    {
        Excel::import(new StopPaymentImport, $request->file('file'));
        return redirect()->back()->with('success', 'Data Imported Successfully');
    }

    public function export()
    {
        return Excel::download(new StopPaymentExport, 'stop_payments.xlsx');
    }



    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'broker_id' => 'required|string',
            'pef_code' => 'required|string',
            'name' => 'required|string',
            'remark' => 'nullable|string',
            'ref_no' => 'nullable|string',
        ]);

        // Save the new record
        StopPayment::create($request->all());

        // Set flash message
        session()->flash('success', 'Record added successfully!');

        // Redirect back to the form
        return redirect()->route('stop-payments.index'); // Adjust this route if necessary
    }



}
