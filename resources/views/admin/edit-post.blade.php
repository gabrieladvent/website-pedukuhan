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
        <form action="{{ route('edit-proses') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="id" value="{{ $post->id }}" hidden>
            <div class="mb-3">
                <label for="title" class="form-label">Judul Tulisan</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    placeholder="Masukan Judul" name="title" required autofocus value="{{ $post->title }}">
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
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3 d-flex flex-column align-items-center">
                            <input type="file" name="foto_satu" id="foto_satu" accept="image/png, image/jpeg, image/jpg">
                            <br>
                            <img id="imagePreview_satu" src="{{ asset('storage/' . $post->foto_satu) }}" alt="Preview"
                                style="max-width: 250px; max-height: 250px; @if (!$post->foto_satu) display: none; @endif">
                        </div>


                    </div>
                    <div class="col">
                        <div class="p-3 d-flex flex-column align-items-center">
                            <input type="file" name="foto_dua" id="foto_dua" accept="image/png, image/jpeg, image/jpg">
                            <br>
                            <img id="imagePreview_dua" src="{{ asset('storage/' . $post->foto_dua) }}" alt="Preview"
                                style="max-width: 250px; max-height: 250px; @if (!$post->foto_dua) display: none; @endif">
                        </div>


                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3 d-flex flex-column align-items-center">
                            <input type="file" name="foto_tiga" id="foto_tiga" accept="image/png, image/jpeg, image/jpg">
                            <br>
                            <img id="imagePreview_tiga" src="{{ asset('storage/' . $post->foto_tiga) }}" alt="Preview"
                                style="max-width: 250px; max-height: 250px; @if (!$post->foto_tiga) display: none; @endif">
                        </div>


                    </div>
                    <div class="col">
                        <div class="p-3 d-flex flex-column align-items-center">
                            <input type="file" name="foto_empat" id="foto_empat" accept="image/png, image/jpeg, image/jpg">
                            <br>
                            <img id="imagePreview_empat" src="{{ asset('storage/' . $post->foto_empat) }}" alt="Preview"
                                style="max-width: 250px; max-height: 250px; @if (!$post->foto_empat) display: none; @endif">
                        </div>


                    </div>
                </div>
            </div>

            <div class="container px-4 text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3 d-flex flex-column align-items-center">
                            <input type="file" name="foto_lima" id="foto_lima" accept="image/png, image/jpeg, image/jpg">
                            <br>
                            <img id="imagePreview_lima" src="{{ asset('storage/' . $post->foto_lima) }}" alt="Preview"
                                style="max-width: 250px; max-height: 250px; @if (!$post->foto_lima) display: none; @endif">

                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-danger me-md-2" type="button"><i class="fa-solid fa-ban"></i>
                            Batal</button>
                        <button class="btn btn-success" type="submit"><i class="fa-solid fa-rotate"></i>
                            Update</button>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <script>
        const inputFiles = document.querySelectorAll('input[type="file"]');
        const imagePreviews = document.querySelectorAll('img[id^="imagePreview"]');

        inputFiles.forEach((inputFile, index) => {
            inputFile.addEventListener('change', function(event) {
                const file = event.target.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreviews[index].src = e.target.result;
                    imagePreviews[index].style.display = 'block';
                };

                reader.readAsDataURL(file);
            });
        });
    </script>
@endsection
