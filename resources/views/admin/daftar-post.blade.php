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
        <p class="mb-3 fs-3 fw-bold text-dark"><i class="fa-solid fa-book"></i></i> Daftar Postingan</p>
        <div class="add mb-3">
            <a href="{{ route('post-view') }}" class="btn btn-info"><i class="fa-solid fa-plus me-2"></i>Tambah</a>
        </div>
        <div class="table">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center">Judul</th>
                        <th rowspan="2" class="text-center">Kategori</th>
                        <th rowspan="2" class="text-center">Penulis</th>
                        <th rowspan="2" class="text-center">Headline</th>
                        <th colspan="3" class="text-center">Aksi</th>
                    </tr>
                    <tr style="display:none">
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posting as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ optional($post->kategori)->kategori_name }}</td>
                            @foreach ($users as $user)
                                @if ($post->kode_user == $user->id)
                                    <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                @endif
                            @endforeach
                            <td class="text-wrap">{{ $post->headline }}</td>
                            <td>
                                <a href="{{ route('show-post', ['slug' => $post->slug, 'kode_user' => $post->kode_user]) }}"
                                    class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('edit-post', ['slug' => $post->slug, 'kode_user' => $post->kode_user]) }}"
                                    class="btn btn-dark"><i class="fa-solid fa-pencil"></i></a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa-solid fa-trash"></i></button>
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
                        <p class="fs-4">Apakah anda yakin ingin menghapus???</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        @if (count($posting) >= 1)
                            <a href="{{ route('delete-post', ['slug' => $post->slug, 'kode_user' => $post->kode_user]) }}"
                                class="btn btn-danger">Hapus</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
    </main>
@endsection
