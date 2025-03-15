<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    protected $table = 'pengalaman_kerja';
    protected $fillable = ['perusahaan', 'posisi', 'mulai', 'selesai', 'deskripsi'];
}
