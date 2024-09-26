<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    // Definisikan kolom yang bisa diisi secara massal
    protected $fillable = ['nama', 'jabatan', 'alamat', 'telepon'];
}
