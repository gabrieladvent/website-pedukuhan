<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Weru | {{ $title }}</title>
    <link href="{{ asset('assets/img/icon.png') }}" rel="icon">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/read.css') }}">
</head>

<body>
    <header class="masthead" style="background-image:url('{{ asset('storage/' . $post->foto_satu) }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">{{ optional($post->subKategori)->sub_name }}</h2>
                        @foreach ($user as $users)
                            @if ($post->kode_user == $users->id)
                                <span class="meta">Posted by&nbsp;<a
                                        href="#">{{ $users->first_name . ' ' . $users->last_name }}</a>&nbsp; on
                                    {{ $post->created_at }}</span>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="trix-content mb-3" style="text-align: justify">
                        @php
                            echo $post->body;
                        @endphp
                    </div>
                    @foreach ($foto as $index => $photo)
                        <a href="#gambar-1" class="">
                            <img class="thumb img-fluid ms-3 mb-3" style="width: 30%"
                                src="{{ asset('storage/' . $photo['path']) }}" alt="{{ $photo['name'] }}" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </article>


    <div class="overlay" id="gambar-1">
        <a href="" class="close">
            <svg style="width:47px;height:47px" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M14.59,8L12,10.59L9.41,8L8,9.41L10.59,12L8,14.59L9.41,16L12,13.41L14.59,16L16,14.59L13.41,12L16,9.41L14.59,8Z" />
            </svg>
        </a>
        <img src="{{ asset('storage/' . $photo['path']) }}" alt="{{ $photo['name'] }}">
        <p class="caption-text text-light">{{ $photo['name'] }}</p>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;34 WERU 2024</p>
                    <a href="{{ route('home') }}" id=""><i class="fa-regular fa-hand-point-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/clean-blog.js') }}"></script>

    <script>
        document.getElementById('goBackLink').addEventListener('click', function(event) {
            event.preventDefault();
            window.history.back();
        });
    </script>


</body>

</html>
