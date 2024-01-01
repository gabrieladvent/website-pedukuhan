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
        <p class="mb-3 fs-3 fw-bold text-dark"><i class="fa-solid fa-file-word"></i> Edit Postingan</p>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul Tulisan</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    placeholder="Masukan Judul" name="title" required autofocus value="{{ $post->title }}"">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select bg-transparent" name="id_kategori">
                    @foreach ($kategories as $item)
                        <option value="{{ $item->id }}" @if ($post->id_kategori == $item->id) selected @endif>
                            {{ $item->kategori_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ $post->body }}">
                <trix-editor input="body"></trix-editor>
            </div>

            <div class="mb-4">
                <label for="body" class="form-label">Dokumentasi</label>
                <div class="row">
                    @foreach (['foto_satu', 'foto_dua', 'foto_tiga', 'foto_empat', 'foto_lima'] as $foto)
                        <div class="col-md-4">
                            @php
                                $photoUrl = asset('storage/' . $post->$foto);
                            @endphp

                            @if ($post->$foto)
                                <img src="{{ $photoUrl }}" alt="{{ $foto }}" class="img-fluid" width="50%">
                            @endif

                            <div class="mt-2">
                                <label for="{{ $foto }}" class="form-label">Ubah
                                    {{ ucfirst(str_replace('_', ' ', $foto)) }}</label>
                                <input type="file" name="{{ $foto }}" id="{{ $foto }}"
                                    accept="image/png, image/jpeg, image/jpg"
                                    onchange="previewImage(this, '{{ $foto }}_preview')">
                                <img id="{{ $foto }}_preview" src="{{ $photoUrl }}"
                                    alt="{{ $foto }} Preview"
                                    style="display: none; max-width: 100px; max-height: 100px;">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="container px-4 text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3 d-flex flex-column align-items-center">

                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-danger me-md-2" type="button"><i class="fa-solid fa-ban"></i> Batal</button>
                        <button class="btn btn-success" type="submit"><i class="fa-solid fa-paper-plane"></i>
                            Upload</button>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <script>
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.style.display = 'block';
                    preview.src = e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.style.display = 'none';
                preview.src = '#';
            }
        }
    </script>
@endsection
