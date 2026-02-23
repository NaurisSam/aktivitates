<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nodarbibas extends Model
{
    protected $table = 'nodarbibas';
    protected $primaryKey = 'NodarbibasID';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;

    // allow mass assignment for these columns
    protected $fillable = [
        'AktivitatesID',
        'VaditajsID',
        'Diena',
        'SakumaLaiks',
        'BeiguLaiks',
        'Telpa',
        'MacibuGads'
    ];
}
