@extends('nav-foot.layout-admin')
@section('isi-content')
    @include('nav-foot.sidebar-admin', ['user' => $user])
    <main id="main">
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
            </div>
        @elseif (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <p class="mb-3 fs-3 fw-bold text-dark"><i class="fa-solid fa-users"></i> Daftar Aktivasi Akun</p>
        <div class="table">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">Kode User</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Nama User</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aktivasi as $item)
                        <tr>
                            <td class="text-center">{{ $item->id }}</td>
                            <td class="text-center">{{ $item->email }}</td>
                            <td class="text-center">{{ $item->first_name . ' ' . $item->last_name }}</td>
                            @if ($item->activate == null)
                                <td class="text-center">Akun Belum Aktif</td>
                            @else
                                <td class="text-center">Akun Aktif</td>
                            @endif

                            <td class="text-center">
                                <a href="{{ route('aktivasi-user', ['id' => $item->id]) }}" class="btn btn-info"><i
                                        class="fa-solid fa-power-off"></i></a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i
                                        class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="fs-4">Apakah anda yakin ingin menghapus user???</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        @if (count($aktivasi) >= 1)
                            <a href="{{ route('delete-user', ['id' => $item->id]) }}" class="btn btn-danger">Hapus</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
