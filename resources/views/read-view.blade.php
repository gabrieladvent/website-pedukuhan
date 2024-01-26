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

    <style>
        img {
            vertical-align: middle;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    <header class="masthead" style="background-image:url('{{ asset('storage/' . $post->foto_satu) }}');">
        
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
                                        {{ $post->created_at->format('l, d F Y') }}
                                    </span>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
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
                    <div class="foto">
                        @foreach ($foto as $index => $image)
                            <div class="mySlides">
                                <img src="{{ asset('storage/' . $image['path']) }}" style="width:100%">
                            </div>
                        @endforeach

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                        <div class="row">
                            @foreach ($foto as $index => $fotoThumb)
                                <div class="column">
                                    <img class="demo cursor" src="{{ asset('storage/' . $fotoThumb['path']) }}"
                                        style="width:100%" onclick="currentSlide({{ $index + 1 }})"
                                        alt="Image {{ $index + 1 }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;34 WERU 2024</p>
                    <a href="#" id="goBackLink"><i class="fa-regular fa-hand-point-left"></i>
                        Kembali</a>
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
            event.preventDefault(); // Prevent the default behavior of the link
            window.history.back(); // Go back to the previous page
        });

        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>


</body>

</html>
