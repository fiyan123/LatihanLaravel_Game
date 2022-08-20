<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    use HasFactory;
    public $fillable = ['nama_game', 'nama_pembuat', 'tahun_dirilis', 'id_perusahaan'];
    public $timestamps = true;

    // membuat relasi one to one di model
    // public function kelas()
    // {
    //     // data dari model 'Siswa' bisa dimiliki
    //     // oleh model 'kelas' melalui 'id_kelas'
    //     return $this->belongsTo(Kelas::class, 'id_kelas');
    // }
    public function perusahaan()
    {
        // data dari model 'Siswa' bisa dimiliki
        // oleh model 'kelas' melalui 'id_kelas'
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }
}
