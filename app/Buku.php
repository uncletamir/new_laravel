<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "buku";
    protected $primaryKey = "id";
    protected $fillable = [
      'id', 'kode_id', 'judul_buku', 'pengarang_buku', 'penerbit_buku', 'jml_buku'
    ];

    public function kategori()
    {
      return $this->belongsTo(Kategori::class, 'kode_id')->withDefault();
      // return $this->belongTo('Kategori', 'kode_id');
      // return $this->belongTo('App\Kategori', 'kode_id');
    }
}
