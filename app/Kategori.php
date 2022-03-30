<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
  protected $table = "kategori_buku";
  protected $primaryKey = "id";
  protected $fillable = [
    'id', 'judul_kategori', 'kode_kategori'
  ];

  public function buku()
  {
    return $this->hasMany(Buku::class)->withDefault();
    // return $this->hasMany('Buku', 'kode_id');
    // return $this->hasMany('App\Buku','kode_id');
  }
}
