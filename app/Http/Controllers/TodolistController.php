<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    function tampil() {
        $data = Todolist::get();
        return view('todolist.tampil', compact('data'));
    }

    function tambah(Request $request) {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'activity' => 'required'
        ]);

        try {
            $data = new Todolist();
            $data->start_time = $request->start_time;
            $data->end_time = $request->end_time;
            $data->activity = $request->activity;
            $data->save();
            return redirect()->route('todolist.tampil')->with('success', 'Data Berhasil Ditambahkan');
        } catch (\Exception $e) {
            return redirect()->route('todolist.tampil')->with('fail', $e->getMessage());
        }
    }

    function delete($id) {
        $data = Todolist::find($id);
        $data->delete();
        return redirect()->route('todolist.tampil')->with('success', 'Data Berhasil Dihapus');
    }
}
