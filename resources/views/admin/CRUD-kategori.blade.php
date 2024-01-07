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

        <h1> <i class="fa-solid fa-list"></i> Kategori</h1>

        <form action="{{ route('add-kategori') }}" method="POST">
            @csrf
            <div class="row mb-3 mt-5 ms-5">
                <div class="col-md-4">
                    <div>
                        <label for="kategori_name" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control @error('kategori_name') is-invalid @enderror"
                            id="kategori_name" placeholder="Masukan Nama Kategori" name="kategori_name"
                            value="{{ old('kategori_name') }}">
                        @error('kategori_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-5 ms-5">
                <div class="col">
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-map-pin"></i> Tambah</button>
                </div>
            </div>
        </form>

        <div class="tabel me-5 ms-5">
            <p class="fs-4">Daftar Kategori</p>
            <table id="example" class="display text-center" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama Kategori</th>
                        <th class="text-center">Pembuat</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($kategori as $item)
                        <tr>
                            <td>{{ $counter }}</td>
                            <td>{{ $item->kategori_name }}</td>
                            <td>
                                @php
                                    $found = false;
                                @endphp
                                @foreach ($users as $user)
                                    @if ($item->kode_user == $user->id)
                                        {{ $user->first_name . ' ' . $user->last_name }}
                                        @php
                                            $found = true;
                                            break;
                                        @endphp
                                    @endif
                                @endforeach
                                @if (!$found)
                                    Tidak Ada Penulis
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#editModal" data-bs-whatever="@mdo" data-id="{{ $item->id }}"
                                    data-kode_user="{{ $user->id }}" data-kategori_nama="{{ $item->kategori_name }}">
                                    <i class="fa-solid fa-pen-clip"></i> Edit
                                </button>
                            </td>
                        </tr>
                        @php
                            $counter++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- modal edit --}}
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kategotri</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('edit-kategori') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="hidden" id="recipient-id" name="id" value="">
                                <input type="hidden" id="recipient-kode-user" name="kode_user" value="">
                                <label for="recipient-kategori-nama" class="col-form-label">Nama Kategori:</label>
                                <input type="text" class="form-control" id="recipient-kategori-nama"
                                    name="kategori_nama">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const editButtons = document.querySelectorAll('.btn-edit');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    const kodeUser = this.getAttribute('data-kode_user');
                    const kategoriNama = this.getAttribute('data-kategori_nama');

                    // Masukkan data ke dalam modal edit
                    const modal = document.querySelector('#editModal');
                    const inputId = modal.querySelector('#recipient-id');
                    const inputKodeUser = modal.querySelector('#recipient-kode-user');
                    const inputKategoriNama = modal.querySelector('#recipient-kategori-nama');

                    inputId.value = id;
                    inputKodeUser.value = kodeUser;
                    inputKategoriNama.value = kategoriNama;
                });
            });
        });
    </script>
@endsection
