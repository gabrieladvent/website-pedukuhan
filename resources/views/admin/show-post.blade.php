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
            <label for="title" class="form-label">Kategori</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                placeholder="Masukan Judul" name="title" readonly value="{{ $post->kategori->kategori_name }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Penulis</label>
            @foreach ($users as $users)
        
                @if ($users->id == $post->kode_user)
                
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Masukan Judul" name="title" readonly
                        value="{{ $item->first_name . ' ' . $item->last_name }}">
                @endif
            @endforeach
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <!-- Tambahkan textarea untuk menyimpan isi body (untuk ditampilkan dalam Trix) -->
            <textarea id="body" name="body" style="display: none;">{{ $post->body }}</textarea>

            <!-- Tampilkan editor Trix -->
            <trix-editor input="body" style="pointer-events: none;"></trix-editor>
        </div>

    </main>
@endsection
