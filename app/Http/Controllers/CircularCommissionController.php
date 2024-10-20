<?php

namespace App\Http\Controllers;

use App\Exports\CircularCommissionExport;
use App\Imports\CircularCommissionImport;
use App\Imports\FinalCMCommissionImport;
use App\Models\CircularCommission; // Correct Model Import
use App\Models\FinalCMCommission;
use App\Models\BMCommission;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CircularCommissionController extends Controller
{
    /**
     * Display the import view with all commissions data.
     */
    public function importView()
    {
        // Retrieve all records from the circular_commissions, final_cm_commissions, and bm_commissions tables
        $circularCommissions = CircularCommission::all();
        $commissions = FinalCMCommission::all();
        $circommissions = BMCommission::all(); 

        return view('import', compact('circularCommissions', 'commissions', 'circommissions'));
    }

    /**
     * Display the view for importing Circular Commissions.
     */
    public function importcir()
    {
        $circularCommissions = CircularCommission::all();
        return view('import-cir', compact('circularCommissions'));
    }

    /**
     * Import Circular Commissions from a file.
     */
    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        // Import the data from the file
        Excel::import(new CircularCommissionImport, $request->file('file'));

        return redirect()->back()->with('success', 'Data Imported Successfully!');
    }

    /**
     * Export Circular Commissions as an Excel file.
     */
    public function export()
    {
        // Export the Circular Commission data
        return Excel::download(new CircularCommissionExport, 'circular_commission.xlsx');
    }
}
