<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class MahasiswaController extends Controller
{
    function tampil() {
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa.tampil', compact('mahasiswa'));
    }
    function tambah() {
        return view('mahasiswa.tambah');
    }
    function submit(Request $request) {
        $request->validate([
            'nim' => 'required|integer|unique:mahasiswa',
            'nama' => 'required|string',
            'jurusan' => 'required|string',
            'email' => 'required|email|unique:mahasiswa'
        ]);

        try {
            $mahasiswa = new Mahasiswa();
            $mahasiswa->nim = $request->nim;
            $mahasiswa->nama = $request->nama;
            $mahasiswa->jurusan = $request->jurusan;
            $mahasiswa->email = $request->email;
            $mahasiswa->save();

            return redirect()->route('mahasiswa.tampil')->with('success', 'Data mahasiswa berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->route('mahasiswa.tambah')->with('fail', $e->getMessage());
        }
    }

    function edit($id) {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required|string',
            'jurusan' => 'required|string',
            'email' => 'required|email'
        ]);

        try {
            $mahasiswa = Mahasiswa::find($id);
            $mahasiswa->nama = $request->nama;
            $mahasiswa->jurusan = $request->jurusan;
            $mahasiswa->email = $request->email;
            $mahasiswa->update();

            return redirect()->route('mahasiswa.tampil')->with('success', 'Data mahasiswa berhasil diedit');
        }   catch (\Exception $e) {
            return redirect()->route('mahasiswa.edit')->with('fail', $e->getMessage());
        }
    }

    function delete($id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.tampil');
    }
}