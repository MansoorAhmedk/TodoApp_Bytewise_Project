<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemController extends Controller
{
    //
    function addItems(Request $req){
        $items = new Items();
        $items -> sno = null;
        $items -> items = $req ->items;
        $items -> save();
        return redirect('/'); 
    }


    function showItems(){
        $items= Items::all();
        return view('home',['items'=>$items]);

    }

    function deleteItems(){
        $items = Items::find();
        $items->delete();
        return redirect('/'); 
    }


}
