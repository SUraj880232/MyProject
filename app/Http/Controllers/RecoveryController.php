<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RecoveryImport;
use App\Models\Recovery;

class RecoveryController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        Excel::import(new RecoveryImport, $request->file('file'));

        return back()->with('success', 'Data imported successfully.');
    }


    public function index()
    {
        // Fetch all recoveries from the database
        $recoveries = Recovery::all();

        // Return a view with the recoveries data
        return view('recoveries.index', compact('recoveries'));
    }

    public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'file' => 'required|file|mimes:xlsx,csv',
        // Add other validations as needed
    ]);

    // Handle file upload and storage logic
    // For example:
    // $path = $request->file('file')->store('uploads');

    // Redirect back with success message
    return redirect()->route('recoveries.index')->with('success', 'File uploaded successfully!');
}

}
