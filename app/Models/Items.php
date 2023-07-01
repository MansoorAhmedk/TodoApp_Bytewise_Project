<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    public $timestamps = false;
    // protected $primaryKey = 'sno';
    protected $fillable=[
       'items','sno'
    ];
}
