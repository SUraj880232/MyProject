<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BMCommissionImport;
use App\Imports\CircularCommissionImport;
use App\Imports\FinalCMCommissionImport;
use App\Exports\BMCommissionExport;
use App\Exports\CircularCommissionExport;
use App\Models\BMCommission;
use App\Models\CircularCommission;
use App\Models\FinalCMCommission;

class CommissionController extends Controller
{
    // Show the view with all data from BM, Final CM, and Circular commissions
    public function index()
    {
        $bmCommissions = BMCommission::all();
        $finalCMCommissions = FinalCMCommission::all();
        $circularCommissions = CircularCommission::all();
        
        // Return the view with the data
        return view('import-export', compact('bmCommissions', 'finalCMCommissions', 'circularCommissions'));
    }

    // Import BM Commission data
    public function importBMCommission(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new BMCommissionImport, $request->file('file'));

        return redirect()->back()->with('success', 'BM Commission data imported successfully!');
    }

    // Export BM Commission data
    public function exportBMCommission()
    {
        return Excel::download(new BMCommissionExport, 'bmcommission.xlsx');
    }

    // Import Circular Commission data
    public function importCircularCommission(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new CircularCommissionImport, $request->file('file'));

        return redirect()->back()->with('success', 'Circular Commission data imported successfully!');
    }

    // Export Circular Commission data
    public function exportCircularCommission()
    {
        return Excel::download(new CircularCommissionExport, 'circular_commission.xlsx');
    }

    // Import Final CM Commission data
    public function importFinalCMCommission(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new FinalCMCommissionImport, $request->file('file'));

        return redirect()->back()->with('success', 'Final CM Commission data imported successfully!');
    }
}
