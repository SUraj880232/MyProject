<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Imports\DoReportImport;
use App\Exports\DoReportExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\DoReport; // Correct import for the model

class DoReportController extends Controller
{
    // Import function
    public function import(Request $request)
    {
        Excel::import(new DoReportImport, $request->file('file'));
        return redirect()->back()->with('success', 'DoReport imported successfully!');
    }

    // Export function
    public function export()
    {
        return Excel::download(new DoReportExport, 'doreports.xlsx');
    }

    // View data
    public function index()
    {
        $reports = DoReport::all();
        return view('doreports.index', compact('reports'));
    }
}
