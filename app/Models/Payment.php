<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_bank',
        'pemilik_rekening',
        'nominal',
        'img_bukti',
        'status'
    ];
    public function siswa(){
        return $this->belongsTo(Siswa::class,  'user_id');
    }
}
