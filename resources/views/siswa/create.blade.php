@extends('layout.app')
@section('title', 'siswa')
@section('content')


@section('content')
        <div class="container my-4">
        <h1 class="my-4">Buat Data Baru</h1>

        <form method="post" action="{{ url('siswa') }}">
    @csrf
    <div class="container my-3">
        <div class="mb-3">
            <label for="title" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
    </div>

    <div class="container my-3">
        <div class="mb-4">
            <label for="title" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required>
        </div>
    </div>

    <div class="container my-3">
        <div class="mb-4">
            <label for="title" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>


@endsection
