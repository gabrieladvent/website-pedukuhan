@extends('nav-foot.layout-admin')
@section('isi-content')
    @include('nav-foot.sidebar-admin', ['user' => $user])
    <main id="main">
        <h1 class="mb-3">Dashboard Admin</h1>
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
            </div>
        @elseif (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row mt-3">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Cerita Kegiatan
                                </div>
                                <div class="mb-0 font-weight-bold text-gray-800">
                                    <p class="h2">{{ count($kegiatan) }} cerita</p>
                                </div>
                                <div>
                                    <a href="{{ route('daftar-post') }}">see more</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-database fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah Cerita Kearifan Lokal
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <p class="h2">{{ count($kearifan) }}</p>
                                </div>
                                <div>
                                    <a href="{{ route('daftar-post') }}">see more</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-database fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Jumlah Kategori
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            <p class="h2">{{ count($kategori) }}</p>
                                        </div>
                                        <div>
                                            <a href="{{ route('crud-kategori') }}">see more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Sub Kategori
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <p class="h2">{{ count($sub) }}</p>
                                </div>
                                <div>
                                    <a href="{{ route('crud-kategori') }}">see more</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                                    Jumlah Akun Admin
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <p class="h2">{{ count($jumlahUser) }}</p>
                                </div>
                                <div>
                                    <a href="{{ route('daftar-user') }}">see more</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Aktivasi Akun
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <p class="h2">{{ $aktivasi }}</p>
                                </div>
                                <div>
                                    <a href="{{ route('aktivasi-view') }}">see more</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-user-lock fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
