<?php

namespace App\Http\Controllers;

use App\Export\itemsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;



class itemsExportController extends Controller
{
    //
    public function export()
    {
        return Excel::download(new itemsExport, 'items.xlsx');
    }
}
