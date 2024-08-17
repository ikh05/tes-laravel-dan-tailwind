<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;

class GuruController extends Controller{
    public function index()
    {
        return view('daftar_guru', [
            'title' => 'Daftar Guru',
            'active' => 'Guru',
            'guru' => Guru::all()
        ]);
    }
    public function detail(Guru $guru)
    {
        return view('detail_guru', [
            'title' => 'Guru',
            'active' => 'Guru',
            'guru' => $guru
        ]);
    }
    public function login()
    {
        return view('login_guru', [
            'title' => 'Login',
            'active' => '',
            'form1' => 'Masuk',
            'form2' => 'Daftar'
        ]);
    }
}
