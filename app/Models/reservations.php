<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

   
    protected $table = 'reservations';


    protected $fillable = [
        'nama_depan', 
        'nama_belakang', 
        'jumlah_tamu', 
        'tanggal', 
        'waktu', 
        'no_telepon', 
        'meja',
    ];
}
