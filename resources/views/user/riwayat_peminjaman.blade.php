@extends('layouts.apps  ')

@section('content')
    <div class="container">
        @include('components.user.sidebar')

        <div class="row">
            <div class="col">
                <h2>Buku yang Sedang Dipinjam</h2>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Kondisi buku</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjaman as $key =>$p)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $p->buku->judul}}</td>
                                <td>{{ $p->tanggal_peminjaman}}</td>
                                <td>{{ $p->kondisi_buku_saat_dipinjam}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
