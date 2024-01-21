<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Weru | {{ $title }}</title>
    <link href="{{ asset('assets/img/icon.png') }}" rel="icon">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .mainwrapper {
            background: #fefefe;
            display: flex;
            width: 100%;
            height: 650px;
            justify-content: center;
            align-items: center;
        }

        img.imgthumb {
            width: 150px;
            border-radius: 10px;
        }

        /* overlay by webprogramminunpas and modified by nelayankode.com*/
        .overlay {
            width: 0;
            height: 0;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0);
            z-index: 9999;
            transition: .8s;
            text-align: center;
            padding: 150px 0;
        }

        .overlay:target {
            width: auto;
            height: auto;
            bottom: 0;
            right: 0;
            background: rgba(0, 0, 0, .7);
        }

        .overlay img {
            max-height: 100%;
            box-shadow: 2px 2px 7px rgba(0, 0, 0, .5);
        }

        .overlay:target img {
            animation: zoomDanFade 1s;
        }

        .overlay .close {
            position: absolute;
            top: 2%;
            right: 2%;
            margin-left: -20px;
            color: white;
            text-decoration: none;
            line-height: 14px;
            padding: 5px;
            opacity: 0;
        }

        .overlay:target .close {
            animation: slideDownFade .5s .5s forwards;
        }

        /* animasi */
        @keyframes zoomDanFade {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes slideDownFade {
            0% {
                opacity: 0;
                margin-top: -20px;
            }

            100% {
                opacity: 1;
                margin-top: 0;
            }
        }

        @media only screen and (max-width: 600px) {
            .mainwrapper {
                height: auto;
                padding: 20px;
            }

            .overlay {
                padding: 50px 0;
            }

            img.imgthumb {
                width: 100%;
                border-radius: 10px;
            }

            .overlay img {
                width: 100%;
                max-height: 70vh;
            }
        }
    </style>

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
                    <div class="trix-content" style="text-align: justify">
                        @php
                            echo $post->body;
                        @endphp
                    </div>
                    @foreach ($foto as $index => $photo)
                        <a href="#gambar-1">
                            <img class="thumb" src="{{ asset('storage/' . $photo['path']) }}"
                                alt="{{ $photo['name'] }}" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </article>


    <div class="overlay" id="gambar-1">
        <a href="#" class="close">
            <svg style="width:47px;height:47px" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M14.59,8L12,10.59L9.41,8L8,9.41L10.59,12L8,14.59L9.41,16L12,13.41L14.59,16L16,14.59L13.41,12L16,9.41L14.59,8Z" />
            </svg>
        </a>
        <img src="{{ asset('storage/' . $photo['path']) }}" alt="Nelayan Kode">
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i
                                    class="fa fa-circle fa-stack-2x"></i><i
                                    class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i
                                    class="fa fa-circle fa-stack-2x"></i><i
                                    class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i
                                    class="fa fa-circle fa-stack-2x"></i><i
                                    class="fa fa-github fa-stack-1x fa-inverse"></i></span></li>
                    </ul>
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;Brand 2024</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/clean-blog.js') }}"></script>


</body>

</html>
