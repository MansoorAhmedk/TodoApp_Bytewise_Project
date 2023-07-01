<?php

namespace App\Exports;

use App\Models\items;
use Maatwebsite\Excel\Concerns\FromCollection;


class itemsExport implements FromCollection
{
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return items::all();
    }
}
