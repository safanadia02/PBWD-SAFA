<?php

namespace App\Http\Controllers;

use App\Models\prodiModel;
use Illuminate\Http\Request;

class prodiController extends Controller
{
    
    public function index()
    {
        $prodi = prodiModel::orderBy('nama_prodi', 'asc')->get();
        return view('prodi', compact('prodi'));
    }

    public function create()
    {
        return view('createProdi');
    }

    public function store(Request $request)
    {
        $data = [
            'id' => $request->no,
            'nama_prodi' => $request->prodi,
            'fakultas' => $request->fk,
            'kaprodi' => $request->kaprodi,
            'sekprodi' => $request->sekprodi,
        ];
        $simpan = prodiModel::create($data);
        if ($simpan) {
            echo "Berhasil";
            return redirect()->to('prodi');
        }
    }
}
