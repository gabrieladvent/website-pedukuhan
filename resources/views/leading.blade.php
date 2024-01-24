@extends('nav-foot.layout')
@section('isi-content')
    <header class="bg-dark">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <p class="fw-bold text-success mb-2">WERU | PETIR | RONGKOP | GUNUNG KIDUL | YOGYAKARTA</p>
                        <h1 class="fw-bold">Selamat Datang dan <em>Enjoy</em>!</h1>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="position-relative" style="display: flex;flex-wrap: wrap;justify-content: flex-end;">
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-15%, 35%, 0);">
                            <img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.8"
                                src="assets/img/products/3.jpg">
                        </div>
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-5%, 20%, 0);">
                            <img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.4"
                                src="assets/img/products/2.jpg">
                        </div>
                        <div style="position: relative;flex: 0 0 60%;transform: translate3d(0, 0%, 0);">
                            <img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.25"
                                src="assets/img/products/1.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

{{-- Di dukung --}}
    <section class="py-5">
        <div class="container text-center py-5">
            <p class="mb-4" style="font-size: 1.6rem;">
                Ini adalah website profile
                <span class="text-success">
                    <strong>Padukuhan Weru.</strong>
                </span>
                &nbsp;Persembahan dari mahasiswa KKN
            </p>
            <p class="fw-bold text-success mb-2">Didukung Oleh:</p>
            <a href="#"> <img class="m-3" style="width: 10%;" src="{{ asset('assets/img/sadhar.png') }}"></a>
            <a href="#"> <img class="m-3" style="width: 15%;" src="{{ asset('assets/img/logo.png') }}"></a>
            <a href="#"> <img class="m-3" style="width: 10%;" src="{{ asset('assets/img/petir.png') }}"></a>
            <a href="#"> <img class="m-3" style="width: 10%;" src="{{ asset('assets/img/laravel.png') }}"></a>
        </div>
    </section>

{{-- cerita kegiatan --}}
    <section>
        <div class="container bg-dark py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Cerita Kita</p>
                    <h3 class="fw-bold">Kegiatan Masyarakat Weru x KKN 34</h3>
                </div>
            </div>
            <div class="py-5 p-lg-5">
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    @php $index = 1; @endphp
                    @if (count($kegiatan) > 0 && $index < 5)
                        @foreach ($kegiatan as $item)
                            <div class="col mb-5">
                                <div class="card shadow-sm">
                                    <div class="card-body px-4 py-5 px-md-5">
                                        <h5 class="fw-bold fs-4 card-title">{{ $item->title }}</h5>
                                        <p class="text-muted card-text mb-4">
                                            {{ $item->headline }}
                                        </p>
                                        <a href="{{ route('read', ['slug' => $item->slug, 'kode_user' => $item->kode_user]) }}"
                                            class="btn btn-primary shadow">Lanjut Baca</a>
                                    </div>
                                </div>
                            </div>
                            @php $index++; @endphp

                            @if ($index == 5)
                            @break
                        @endif
                    @endforeach
                @else
                    <p class="fw-bold">BELUM ADA KEGIATAN YANG DIMASUKAN</p>
                @endif
            </div>
            @if (count($kegiatan) > 4)
                <div class="row mt-3">
                    <div class="col text-end">
                        <a href="{{ route('kegiatan') }}">See More <i class="fa-regular fa-hand-point-right"></i></a>
                    </div>
                </div>
            @endif
        </div>
    </section>

{{-- video profile --}}
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Video Profile Pedukuhan</p>
                </div>
            </div>
            <div class="py-5 p-lg-5">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/23PkijCRZ9E?rel=0&autoplay=1"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>

{{-- kearifan lokal --}}
    <section>
        <div class="container bg-dark py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Kearifan Lokal</p>
                </div>
            </div>
            <div class="py-5 p-lg-5">
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    @php $index = 1; @endphp
                    @if (count($kearifan) > 0 && $index < 5)
                        @foreach ($kearifan as $item)
                            <div class="col mb-5">
                                <div class="card shadow-sm">
                                    <div class="card-body px-4 py-5 px-md-5">
                                        <h5 class="fw-bold fs-4 card-title">{{ $item->title }}</h5>
                                        <p class="text-muted card-text mb-4">
                                            {{ $item->headline }}
                                        </p>
                                        <a href="{{ route('read', ['slug' => $item->slug, 'kode_user' => $item->kode_user]) }}"
                                            class="btn btn-primary shadow">Lanjut Baca</a>
                                    </div>
                                </div>
                            </div>
                            @php $index++; @endphp

                            @if ($index == 5)
                            @break
                        @endif
                    @endforeach
                @else
                    <p class="fw-bold">BELUM ADA KEGIATAN YANG DIMASUKAN</p>
                @endif
            </div>
            @if (count($kearifan) > 4)
                <div class="row mt-3">
                    <div class="col text-end">
                        <a href="{{ route('kearifan') }}">See More <i class="fa-regular fa-hand-point-right"></i></a>
                    </div>
                </div>
            @endif
        </div>
    </section>

{{-- maps --}}
    <section>
    <div class="container mt-5 bg-dark">
        <div class="row">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mt-3">Lokasi Pedukuhan</p>
            </div>
        </div>
        <div class="py-5 ms-3 p-lg-5">
            <div class="mapouter ms-2">
                <div class="gmap_canvas ms-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.881132425488!2d110.72322104061296!3d-8.088693901600259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bc90a718ce6d3%3A0x72d560de989c4b1e!2sPadukuhan%20Weru!5e1!3m2!1sid!2sid!4v1706071529980!5m2!1sid!2sid"
                        width="1040" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    </section>

{{-- developer --}}
    <section class="py-5">
    <div class="container mx-auto py-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2">DEVELOPER</p>
                <h2 class="fw-bold"><strong>TIM KKN 34 WERU</strong></h2>
                <h2 class="fw-bold">UNIVERSITAS SANATA DHARMA</h2>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000"
            data-wrap="true">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="d-block mx-auto w-25" src="{{ asset('assets/img/developer/caesil.jpg') }}">
                        <div class="caption-text text-center mt-3 mb-2">
                            <h4>Caesilia Apri Purwanti</h4>
                            <p><i class="fa-brands fa-instagram me-1"></i><a
                                    href="https://www.instagram.com/caesiliaapr_?igsh=ZXdieGpjNnI1d2dw"
                                    target="_blank">caesilliaapr_</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="d-block mx-auto w-25" src="{{ asset('assets/img/developer/nadila.jpg') }}">
                        <div class="caption-text text-center mt-3 mb-2">
                            <h4>Nadilla Diva Maharani</h4>
                            <p><i class="fa-brands fa-instagram me-1"></i><a
                                    href="https://www.instagram.com/nadilladivaa?igsh=bTZ6M2M0OWV2dDNi&utm_source=qr"
                                    target="_blank">nadilladivaa</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="d-block mx-auto w-25" src="{{ asset('assets/img/developer/saras.jpg') }}">
                        <div class="caption-text text-center mt-3 mb-2">
                            <h4>Saraswati Devi</h4>
                            <p><i class="fa-brands fa-instagram me-1"></i><a
                                    href="⁠https://www.instagram.com/srwt.saa?igsh=aWl1dzVsaHpzN280"
                                    target="_blank">srwt.saa</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="d-block mx-auto w-25" src="{{ asset('assets/img/developer/yoan.jpg') }}">
                        <div class="caption-text text-center mt-3 mb-2">
                            <h4>Yohana Isabel Simanjuntak</h4>
                            <p><i class="fa-brands fa-instagram me-1"></i><a
                                    href="https://www.instagram.com/akuyohana_?igsh=Z2NjdGV3OWNvNnJj"
                                    target="_blank">akuyohana_</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="d-block mx-auto w-25" src="{{ asset('assets/img/developer/dani.jpg') }}">
                        <div class="caption-text text-center mt-3 mb-2">
                            <h4>Dhani Davit</h4>
                            <p><i class="fa-brands fa-instagram me-1"></i><a href="#">dhanidavit_</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="d-block mx-auto w-25" src="{{ asset('assets/img/developer/indah.jpg') }}">
                        <div class="caption-text text-center mt-3 mb-2">
                            <h4>Claudia Cristiani Inda Tokan</h4>
                            <p><i class="fa-brands fa-instagram me-1"></i><a href="#">cldycrstni</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="d-block mx-auto w-25" src="{{ asset('assets/img/developer/gab.jpg') }}">
                        <div class="caption-text text-center mt-3 mb-2">
                            <h4>Gabriel Advent Batan</h4>
                            <p><i class="fa-brands fa-instagram me-1"></i><a href="#">gab_adv</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="d-block mx-auto w-25" src="{{ asset('assets/img/developer/bram.jpg') }}">
                        <div class="caption-text text-center mt-3 mb-2">
                            <h4>Abram Arya Perdana</h4>
                            <p><i class="fa-brands fa-instagram me-1"></i><a href="#">abram_arya</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="d-block mx-auto w-25" src="{{ asset('assets/img/developer/yanto.jpg') }}">
                        <div class="caption-text text-center mt-3 mb-2">
                            <h4>Yulius Susanto</h4>
                            <p><i class="fa-brands fa-instagram me-1"></i><a href="#">_yantosusanto</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev ms-5 me-5" href="#carouselExampleIndicators" role="button"
                data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </section>

{{-- kontak developer --}}
    <section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2">Kontak Kami</p>
                <h2 class="fw-bold">Anda Dapat Mengontak Kami </h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-4">
                <div>
                    <form class="p-3 p-xl-4" action="{{ route('messege') }}" method="POST">
                        @csrf
                        <div class="mb-3"><input class="form-control" type="text" id="name-1"
                                name="nama" placeholder="Name"></div>
                        <div class="mb-3"><input class="form-control" type="email" id="email-1"
                                name="email" placeholder="Email"></div>
                        <div class="mb-3">
                            <textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <div><button class="btn btn-primary shadow d-block w-100" type="submit">Send </button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
                <div class="d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100">
                    <div class="d-flex align-items-center p-3">
                        <div
                            class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                                </path>
                            </svg>
                        </div>
                        <div class="px-2">
                            <h6 class="fw-bold mb-0">Phone</h6>
                            <p class="text-muted mb-0">+6281284115265</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center p-3">
                        <div
                            class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                                </path>
                            </svg>
                        </div>
                        <div class="px-2">
                            <h6 class="fw-bold mb-0">Email</h6>
                            <p class="text-muted mb-0">werukkn034@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
