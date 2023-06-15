@extends('layout.App')
@section('title', 'siswa')
@section('content')
<main class="container">

    <!-- START DATA -->image.png
    <div>
    <h1>
        Data Siswa IDN <a href="{{ url('siswa/create') }}" class="btn btn-primary">+ Tambah Data
            Baru</a>
    </h1>
    <div class="bd-example">
        <div class="bd-example">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    @php($number= 1)
                        @foreach($siswa as $a)

                            <tr>
                                <th scope="row">{{ $number }}</th>
                                <td>{{ $a->nama }}</td>
                                <td>{{ $a->kelas }}</td>
                                <td>{{ $a->jurusan }}</td>
                                <td class="text-end">
                                    <a href="{{ url("siswa/$a->id/edit") }}"
                                        class="btn btn-warning">Edit</a>
                                </td>
                                
                            </tr>
                            @php($number++)
                            @endforeach



            </table>
        </div>
    </div>
    </div>
</main>

@endsection
