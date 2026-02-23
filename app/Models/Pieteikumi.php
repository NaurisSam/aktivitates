<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pieteikumi extends Model
{
    protected $table = 'pieteikumi';
    protected $primaryKey = 'PieteikumsID';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;

    // allow mass assignment for these columns
    protected $fillable = [
        'DalibnieksID',
        'NodarbibasID',
        'PieteiksanasDatums',
        'Statuss'
    ];
}
