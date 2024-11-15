@extends('component.layout')
@section('konten')


<div class="container">
    <div class="card">
        <div class="card-header">Tambah Mahasiswa</div>

        @if (Session::has('fail'))
            <span class="alert alert-danger p-2">{{ Session::get('fail') }}</span>
        @endif

        <div class="card-body">
            <form action="{{ route('mahasiswa.submit') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" id="nim" value="{{ old('nim') }}" class="form-control" placeholder="Masukkan NIM">
                    @error('nim')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control" placeholder="Masukkan Nama">
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" value="{{ old('jurusan') }}" class="form-control" placeholder="Masukkan Jurusan">
                    @error('jurusan')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Masukkan Email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div> 
    
    
@endsection