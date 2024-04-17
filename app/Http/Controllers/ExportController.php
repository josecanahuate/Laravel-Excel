<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index(){
        return view('export');
    }

    public function export(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
