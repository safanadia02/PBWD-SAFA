<?php

namespace App\Http\Controllers;

use App\Models\mahasiswaModel;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{

    public function index()
    {
        $mhs = mahasiswaModel::orderBy('nim', 'asc')->get();
        return view('mahasiswa', compact('mhs'));
    }

    public function create()
    {
        return view('createMahasiswa');
    }


    public function store(Request $request)
    {
        $data = [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama,
            'alamat' => $request->alamat,
            'ttl_lahir' => $request->ttl,
            'jk' => $request->jk
        ];
        $simpan = mahasiswaModel::create($data);
        if ($simpan) {
            echo "Berhasil";
            return redirect()->to('mahasiswa');
        }

    }

}
