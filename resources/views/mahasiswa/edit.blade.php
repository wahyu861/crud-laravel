@extends('component.layout')
@section('konten')


<div class="container">
    <div class="card">
        <div class="card-header">Edit data mahasiswa</div>
        
        @if (Session::has('fail'))
            <span class="alert alert-danger p-2">{{ Session::get('fail') }}</span>
        @endif

        <div class="card-body">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" id="nama" class="form-control mb-3">
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" id="jurusan" class="form-control mb-3">
                    @error('jurusan')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ $mahasiswa->email }}" id="email" class="form-control mb-3">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection