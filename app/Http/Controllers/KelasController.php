<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller{
    public function index()
    {
        
    }

    public function detail(Kelas $kelas)
    {
        return view('detail_kelas',[
            'title' => 'Detail Kelas',
            'active' => 'Guru',
            'kelas' => $kelas,
            'guru' => $kelas->guru
        ]);
    }
}
