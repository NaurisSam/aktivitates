<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table = 'aktivitates';
   protected $primaryKey = 'AktivitatesID';
   public $incrementing = true;
   protected $keyType = 'int';
   public $timestamps = false;

   // allow mass assignment for these columns
   protected $fillable = ['Nosaukums', 'Apraksts', 'KategorijasID', 'DalibniekuSkaits'];

}
