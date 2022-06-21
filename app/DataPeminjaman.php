<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPeminjaman extends Model
{
    protected $table = "data_peminjaman";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'user_id',
        'tgl_pengembalian',
        'tgl_dikembalikan',
        'list_buku'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }
}
