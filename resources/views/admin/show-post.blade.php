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
        <p class="mb-3 fs-3 fw-bold text-dark"><i class="fa-solid fa-file-lines"></i></i> Detail Postingan</p>
        <div class="mb-3">
            <label for="title" class="form-label">Judul Tulisan</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                placeholder="Masukan Judul" name="title" readonly value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Penulis</label>
            @foreach ($users as $item)
                @if ($item->id == $post->kode_user)
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Masukan Judul" name="title" readonly
                        value="{{ $item->first_name . ' ' . $item->last_name }}">
                @endif
            @endforeach
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="title" class="form-label">Kategori</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Masukan Judul" name="title" readonly value="{{ $post->kategori->kategori_name }}">
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="title" class="form-label">Sub Kategori</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Tidak Ada Sub Kategori" name="title" readonly
                        value="{{ optional($post->subKategori)->sub_name }}">
                </div>

            </div>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea id="body" name="body" style="display: none;">{{ $post->body }}</textarea>
            <trix-editor input="body" style="pointer-events: none;"></trix-editor>
        </div>
        <div class="mb-4">
            <label for="body" class="form-label">Dokumentasi</label>
            <div class="row">
                @if ($post->foto_satu)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $post->foto_satu) }}" alt="foto_satu" class="img-fluid"
                            width="50%">
                    </div>
                @endif

                @if ($post->foto_dua)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $post->foto_dua) }}" alt="foto_dua" class="img-fluid"
                            width="50%">
                    </div>
                @endif

                @if ($post->foto_tiga)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $post->foto_tiga) }}" alt="foto_dua" class="img-fluid"
                            width="50%">
                    </div>
                @endif

                @if ($post->foto_empat)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $post->foto_empat) }}" alt="foto_dua" class="img-fluid"
                            width="50%">
                    </div>
                @endif

                @if ($post->foto_lima)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $post->foto_lima) }}" alt="foto_dua" class="img-fluid"
                            width="50%">
                    </div>
                @endif
            </div>
        </div>
        <div class="mb-3">
            <a href="#" class="btn btn-danger"><i class="fa-solid fa-hand-point-left me-2"></i>Kembali</a>
            <a href="{{ route('edit-post', ['slug' => $post->slug, 'kode_user' => $post->kode_user]) }}"
                class="btn btn-info"><i class="fa-solid fa-pen-clip me-2"></i>Edit</a>
        </div>

    </main>
@endsection
