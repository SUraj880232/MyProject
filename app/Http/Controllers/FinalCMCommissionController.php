<?php

namespace App\Http\Controllers;

use App\Imports\FinalCMCommissionImport;
use App\Models\Final_c_m_commissions; // Make sure to import the model
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\FinalCMCommission;



class FinalCMCommissionController extends Controller
{
    // Existing methods...



    public function index()
    {
        $commissions = FinalCMCommission::all(); // Fetch all data
        return view('final_c_m_commissions.index', compact('commissions'));
    }



    public function importcm()
    {
        $commissions = FinalCMCommission::all(); // Fetch all data
        return view('import-cm', compact('commissions'));
    }
  

    public function import(Request $request)
    {



        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new FinalCMCommissionImport, $request->file('file'));

        return redirect()->route('final_c_m_commissions.index')->with('success', 'Data imported successfully!');
    }



    public function exportFinalCMCommission()
    {
        return Excel::download(new FinalCMCommissionExport, 'FinalCMCommission.xlsx');
    }

    // public function showImportForm()
    // {
    //     return view('final_c_m_commissions.import_form'); // Make sure to create this view
    // }

}


