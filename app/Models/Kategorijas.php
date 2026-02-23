<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategorijas extends Model
{
    protected $table = 'kategorijas';
    protected $primaryKey = 'KategorijasID';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;

    // allow mass assignment for these columns
    protected $fillable = ['Nosaukums', 'Apraksts'];
}
