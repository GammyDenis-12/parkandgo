<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkSpaces extends Model
{
    use HasFactory;
    protected $table = 'park_spaces';
    protected $fillable = [

         'name',
         'status',
         'spaces',
         'price'

    ];
}
