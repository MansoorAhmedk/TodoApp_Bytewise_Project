<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Maatwebsite\Excel\Facades\Excel;
use App\Exports\itemsExport;
use App\Imports\itemImport;
use App\Models\items;
use Excel;

class ItemsController extends Controller
{
    //
    public function exportitems(){
        return Excel::download(new itemsExport, 'items.xlsx');
    }

    public function importitems(Request $request){
        Excel::import(new itemImport, $request->file('file')->store('items'));
        return redirect()->back();
        // dd($request->file('file')->getPathName());
    }

}
