<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\BrokersImport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\BrokerRegister;
use App\Models\Broker;

class BrokerRegisterController extends Controller
{
    public function index()
    {
        $brokers = BrokerRegister::all();

        return view('broker.index', compact('brokers'));
    }

    public function import(Request $request)
    {
        \Log::info('Request data: ', $request->all());

        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        Excel::import(new BrokersImport, $request->file('file')->store('temp'));

        return redirect()->back()->with('success', 'Data Imported Successfully');
    }

}

