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
        <p class="mb-3 fs-3 fw-bold text-dark"><i class="fa-solid fa-file-word"></i> Tambah Postingan</p>
        <form action="{{ route('post-proses') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul Tulisan</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror"
                    id="title" placeholder="Masukan Judul" name="title" required autofocus value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select bg-transparent" name="id_kategori">
                    @foreach ($kategori as $item)
                    @if (old('kategori_id') == $item->id)
                        <option value="{{ $item->id }}" selected>{{ $item->kategori_name }}</option>
                    @else
                    <option value="{{ $item->id }}">{{ $item->kategori_name }}</option>

                    @endif
                        
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>

            <div class="container px-4 text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3 d-flex flex-column align-items-center">
                            <img id="preview_foto_satu" src="#" alt="Preview Foto"
                                style="display: none; max-width: 100px; max-height: 100px;">
                            <input type="file" name="foto_satu" id="foto_satu" accept="image/png, image/jpeg, image/jpg">
                        </div>
                    </div>

                    <div class="col">
                        <div class="p-3 d-flex flex-column align-items-center">
                            <img id="preview_foto_dua" src="#" alt="Preview Foto"
                                style="display: none; max-width: 100px; max-height: 100px;">
                            <input type="file" name="foto_dua" id="foto_dua" accept="image/png, image/jpeg, image/jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-4 text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3 d-flex flex-column align-items-center">
                            <img id="preview_foto_tiga" src="#" alt="Preview Foto"
                                style="display: none; max-width: 100px; max-height: 100px;">
                            <input type="file" name="foto_tiga" id="foto_tiga" accept="image/png, image/jpeg, image/jpg">
                        </div>
                    </div>

                    <div class="col">
                        <div class="p-3 d-flex flex-column align-items-center">
                            <img id="preview_foto_empat" src="#" alt="Preview Foto"
                                style="display: none; max-width: 100px; max-height: 100px;">
                            <input type="file" name="foto_empat" id="foto_empat"
                                accept="image/png, image/jpeg, image/jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-4 text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3 d-flex flex-column align-items-center">
                            <img id="preview_foto_lima" src="#" alt="Preview Foto"
                                style="display: none; max-width: 100px; max-height: 100px;">
                            <input type="file" name="foto_lima" id="foto_lima" accept="image/png, image/jpeg, image/jpg">
                        </div>
                    </div>
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

        // Panggil fungsi previewImage saat ada perubahan pada input file
        document.getElementById('foto_satu').addEventListener('change', function() {
            previewImage(this, 'preview_foto_satu');
        });
        document.getElementById('foto_dua').addEventListener('change', function() {
            previewImage(this, 'preview_foto_dua');
        });
        document.getElementById('foto_tiga').addEventListener('change', function() {
            previewImage(this, 'preview_foto_tiga');
        });
        document.getElementById('foto_empat').addEventListener('change', function() {
            previewImage(this, 'preview_foto_empat');
        });
        document.getElementById('foto_lima').addEventListener('change', function() {
            previewImage(this, 'preview_foto_lima');
        });
    </script>
@endsection
