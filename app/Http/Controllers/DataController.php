<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index()
    {
        // Fetch the data from the database
        $data = DB::table('payments')->get(); // Replace 'your_table_name' with your actual table name

        // Pass the data to the view
        return view('data', ['data' => $data]);
    }
}
