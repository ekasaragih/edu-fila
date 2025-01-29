<?php

namespace App\Http\Controllers;

use App\Models\Diagnostic;
use Illuminate\Http\Request;

class DiagnosticController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:1',
            'alamat' => 'required|string|max:255',
            'jenis_kelamin' => 'required|boolean',
            'gejala' => 'array',
        ]);

        // Simpan data ke database
        $diagnostic = new Diagnostic();
        $diagnostic->nama = $request->nama;
        $diagnostic->umur = $request->umur;
        $diagnostic->alamat = $request->alamat;
        $diagnostic->jenis_kelamin = $request->jenis_kelamin;
        $diagnostic->hasil_diagnosa = $this->diagnosisResult($request->gejala);
        $diagnostic->save();

        // Kirim respons sebagai JSON
        return response()->json([
            'success' => true,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan',
            'gejala' => $request->gejala,
            'hasil_diagnosa' => $this->diagnosisResult($request->gejala),
        ]);
    }

    private function diagnosisResult($gejala)
    {
        return count($gejala) > 0 ? 1 : 0;
    }
}
