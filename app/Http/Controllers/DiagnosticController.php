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

        $diagnostic = new Diagnostic();
        $diagnostic->nama = $request->nama;
        $diagnostic->umur = $request->umur;
        $diagnostic->alamat = $request->alamat;
        $diagnostic->jenis_kelamin = $request->jenis_kelamin;
        $diagnostic->hasil_diagnosa = $this->diagnosisResult($request->gejala);
        $diagnostic->save();

        return redirect()->route('diagnostic')->with('success', 'Data berhasil disimpan');
    }

    private function diagnosisResult($gejala)
    {
        return count($gejala) > 0 ? 1 : 0;
    }
}
