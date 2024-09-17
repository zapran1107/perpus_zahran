@extends('layouts.master')

@section('judul')
    <h2 class="text-primary"> Selamat Datang, {{ Auth::user()->name }}</h2>
@endsection

@section('content')
    <div class="container p-5">
        <div class="row mb-3" style="margin-top:100px;">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100 bg-gradient-primary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-sm font-weight-bold text-uppercase mb-1 text-dark">Jumlah Buku</div>
                                <div class="text-sm text-dark h5 mb-0 font-weight-bold">{{ $buku }}</div>
                                <div class="button mt-2"><a href="/buku" class="text-dark">Lihat</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-book fa-3x text-dark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100 bg-gradient-info">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-sm text-dark font-weight-bold text-uppercase mb-1">Kategori</div>
                                <div class="text-sm text-dark h5 mb-0 font-weight-bold">{{ $kategori }}</div>
                                <div class="button mt-2"><a href="/kategori" class="text-dark">Lihat</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-bookmark fa-3x text-dark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100 bg-gradient-success">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-sm text-dark font-weight-bold text-uppercase mb-1">Anggota</div>
                                <div class="h5 mb-0 mr-3 font-weight-bold text-dark">{{ $user }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-3x text-dark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100 bg-gradient-danger">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-sm text-dark font-weight-bold text-uppercase mb-1"
                                    style="font-size:.8`rem;">Pinjaman Saat ini</div>
                                <div class="h5 mb-0 mr-3 font-weight-bold text-dark">{{ $pinjamanUser }}</div>
                                <div class="button mt-2"><a href="/peminjaman" class="text-dark">Lihat</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-tie fa-3x text-dark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-gradient-secondary">
            <div class="container">
                <h3 class="text-dark"> <i class="fa-solid fa-circle-info text-dark my-3"></i> Informasi Aturan Peminjaaman
                </h3>
                <ol class=text-dark>
                    <li class=text-dark>Waktu peminjaman maksimal 1 minggu</li>
                    <li class=text-dark>Setiap anggota hanya dapat meminjam maksima 3 buku</li>
                    <li class=text-dark>Jika pengenbalian buku lebih dari waktu yang ditentukan akan diberikan denda setiap
                        buku Rp.15.000/minggu.</li>
                    <li class=text-dark>Jika telah meminjam buku,silahkan ke tempat petugas untuk melakukan konfirmasi</li>
                    <li class=text-dark>Jika Terlambat mengembalikan buku dan mendapat denda, maka wajib langsung membayar
                        pada petugas saat mengembalikan buku</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
