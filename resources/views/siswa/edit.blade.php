@extends('layout.app')

@section('title', 'Edit Siswa')

@section('content')

<div class="container my-4">
    <h1 class="mb-4">Edit Data Siswa</h1>

    <form method="POST" action="{{ url("siswa/$siswa->id") }}">
        @method('PATCH')
        @csrf

        <div class="form-group mb-3">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" />
        </div>

        <div class="form-group mb-3">
            <label for="kelas">Kelas:</label>
            <input type="text" class="form-control" name="kelas" value="{{ $siswa->kelas }}" />
        </div>

        <div class="form-group mb-4">
            <label for="jurusan">Jurusan:</label>
            <input type="text" class="form-control" name="jurusan" value="{{ $siswa->jurusan }}" />
        </div>

        <div class="d-flex justify-content-between">
            <div class="d-inline-block">
                <button type="submit" class="btn btn-primary mr-2">Update</button>
            </div>
            <div class="d-inline-block">
                <form method="post" action="{{ url("siswa/$siswa->id") }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </form>
</div>

@endsection
