<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
  protected $table = "orang";
  protected $primaryKey = "id";
  protected $fillable = [
    'id', 'nama', 'umur'
  ];
}
