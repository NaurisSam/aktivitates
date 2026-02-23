<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaditaji extends Model
{
    protected $table = 'vaditaji';
    protected $primaryKey = 'VaditajsID';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;

    // allow mass assignment for these columns
    protected $fillable = [
        'Vards',
        'Uzvards',
        'Talrunis',
        'Epasts',
        'Specializacija'
    ];
}
