<?php

namespace App\Http\Controllers;

use App\Exports\CircularCommissionExport;
use App\Imports\CircularCommissionImport;
use App\Imports\FinalCMCommissionImport;
use App\Models\Final_c_m_commissions;
use App\Imports\BMCommissionImport;
use App\Exports\BMCommissionExport;
use App\Models\BMCommission; 
use App\Models\CircularCommission; // Make sure to import the model
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\FinalCMCommission;

class CircularCommissionController extends Controller
{
    public function importView()
    {
        // Retrieve all records from the circular_commissions table
        $circularCommissions = CircularCommission::all();
        $commissions = FinalCMCommission::all();
        $circommissions = BMCommission::all(); 
        return view('import', compact('circularCommissions','commissions','circommissions'));
    }


    public function importcir()
    {
        $circularCommissions = CircularCommission::all();
        return view('import-cir', compact('circularCommissions'));
    }


    
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        // Import the data from the uploaded file
        Excel::import(new CircularCommissionImport, $request->file('file'));

        return redirect()->back()->with('success', 'Data Imported Successfully!');
    }

    public function export()
    {
        // Download the Circular Commission data as an Excel file
        return Excel::download(new CircularCommissionExport, 'circular_commission.xlsx');
    }


    
}
