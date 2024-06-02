<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;

    protected $table = 'forms';
    protected $primaryKey = 'id_form';    
    protected $fillable = [
        'id_user',
        'email',
        'nama_organisasi',
        'no_telp',
        'kat_kegiatan',
        'lapangan',
        'nama_kegiatan',
        'nama_pj',
        'surat_peminjaman',
        'tor',
        'tanggal',
        'hari',
        'slot',
        'hariRutin',
        'tanggalRutin',
        'slotRutin',
        'status',
        'special_status',
        'catatan'
    ];

    public $timestamps = false;

}
