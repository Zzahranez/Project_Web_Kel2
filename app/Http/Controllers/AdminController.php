<?php
namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return view('admindash'); // Pastikan nama view sesuai dengan file blade Anda
    }
}
