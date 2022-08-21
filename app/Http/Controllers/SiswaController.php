<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::latest()->get();

        return response([
            'message' => 'success',
            'data' => $siswa,
        ]);
    }

    public function create(Request $request)
    {
        $siswa = Siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return response([
            'message' => 'success',
            'data' => $siswa,
        ]);
    }
}
