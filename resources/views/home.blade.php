@extends('component.layout')
@section('konten')
    <a href="{{ route('mahasiswa.tampil') }}">Data Mahasiswa</a><br>
    <a href="{{ route('todolist.tampil') }}">To Do List</a>
@endsection