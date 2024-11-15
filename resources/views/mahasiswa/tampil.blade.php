@extends('component.layout')

@section('konten')

<div class="container">
    <div class="card">

        <div class="card-header">
            List Mahasiswa
            <a href="{{ route('mahasiswa.tambah') }}" class="btn btn-success btn-sm float-end">Tambah</a>
        </div>

        @if (Session::has('success'))
            <span class="alert alert-success p-2">{{ Session::get('success') }}</span>
        @endif

        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
            
                <tbody class="table-group-divider">
                    @if (count($mahasiswa) > 0)
                        @foreach ($mahasiswa as $no=>$mhs)
                            <tr>
                                <td class="text-center">{{ $no+1 }}</td>
                                <td>{{ $mhs->nim }}</td>
                                <td>{{ $mhs->nama }}</td>
                                <td>{{ $mhs->jurusan }}</td>
                                <td>{{ $mhs->email }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <div class="col-auto">
                                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-primary btn-sm px-3">Edit</a>
                                        </div>
                                        <div class="col-auto ms-2">
                                            <a href="{{ route('mahasiswa.delete', $mhs->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                        </div>
                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            Tidak ada data Mahasiswa
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        
    </div>
</div>


<a href="/">&laquo; Back to home</a>
@endsection