<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
      
        $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'jumlah_tamu' => 'required|integer',
            'tanggal' => 'required|date',
            'waktu' => 'required|date_format:H:i',
            'no_telepon' => 'required|string|max:15',
            'meja' => 'required|string|max:10',
        ]);

  
        $reservation = new Reservation();
        $reservation->nama_depan = $request->nama_depan;
        $reservation->nama_belakang = $request->nama_belakang;
        $reservation->jumlah_tamu = $request->jumlah_tamu;
        $reservation->tanggal = $request->tanggal;
        $reservation->waktu = $request->waktu;
        $reservation->no_telepon = $request->no_telepon;
        $reservation->meja = $request->meja;
        $reservation->save();

   
        return redirect()->back()->with('success', 'Reservation berhasil dibuat!');
    }
}
