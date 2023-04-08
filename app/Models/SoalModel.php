<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalModel extends Model
{
    protected $table = 'tabel_soal';
    //    protected $fillable = ['id', 'fakultas', 'prodi', 'kelas', 'isi'];
       protected $fillable = ['nama_mk', 'dosen', 'jumlah', 'keterangan'];

}
