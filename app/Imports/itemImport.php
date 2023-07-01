<?php

namespace App\Imports;

use App\Models\items;
use Maatwebsite\Excel\Concerns\ToModel;

class itemImport implements ToModel
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new items([
            //
            'sno' => $row[0],
            'items' => $row[1],
            
        ]);
    }
}
