<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'uniquecode',
        'jk',
        'nama',
        'asal_sekolah',
        'email',
        'no_hp',
        'no_hp_ayah',
        'no_hp_ibu',
    ];
    public function pembayaran(){
        return $this->hasMany(Payment::class);
    }
}
