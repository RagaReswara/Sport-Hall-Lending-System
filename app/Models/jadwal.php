<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';
    protected $primaryKey = 'id_jadwal';    
    protected $fillable = [
        'hari',
        'status',
        'jam_mulai',
        'jam_selesai'
    ];

    public $timestamps = false;
}
