<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\BMCommissionImport;
use App\Exports\BMCommissionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\BMCommission; // Import the correct model

class ImportExportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        Excel::import(new BMCommissionImport, $request->file('file'));

        return back()->with('success', 'Excel file imported successfully');
    }

    public function export()
    {
        return Excel::download(new BMCommissionExport, 'bmcommission.xlsx');
    }

    public function index()
    {
        // Retrieve all records from the BMCommission model
        $commissions = BMCommission::all(); // Use the correct model name

        // Return the view with the commissions data
        return view('import-export', compact('commissions'));

        
    }
}
