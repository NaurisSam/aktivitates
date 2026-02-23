<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dalibnieki extends Model
{
    protected $table = 'dalibnieki';
    protected $primaryKey = 'DalibnieksID';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;

    // allow mass assignment for these columns
    protected $fillable = [
        'Vards',
        'Uzvards',
        'Klase',
        'Talrunis',
        'Epasts'
    ];
}
