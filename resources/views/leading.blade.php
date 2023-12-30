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

    <section class="py-5">
        <div class="container text-center py-5">
            <p class="mb-4" style="font-size: 1.6rem;">
                Ini adalah website profile
                <span class="text-success">
                    <strong>Dukuh Weru.</strong>
                </span>
                &nbsp;Persembahan dari mahasiswa KKN
            </p>
            <p class="fw-bold text-success mb-2">Didukung Oleh:</p>
            <a href="#"> <img class="m-3" src="assets/img/brands/google.png"></a>
            <a href="#"> <img class="m-3" src="assets/img/brands/microsoft.png"></a>
            <a href="#"> <img class="m-3" src="assets/img/brands/apple.png"></a>
            <a href="#"> <img class="m-3" src="assets/img/brands/facebook.png"></a>
            <a href="#"> <img class="m-3" src="assets/img/brands/twitter.png"></a>
        </div>
    </section>

    <section>
        <div class="container bg-dark py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Cerita Kita</p>
                    <h3 class="fw-bold">Cerita Rakyat Di Pedukuhan Weru</h3>
                </div>
            </div>
            <div class="py-5 p-lg-5">
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    <div class="col mb-5">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <h5 class="fw-bold card-title">Lorem ipsum dolor sit&nbsp;</h5>
                                <p class="text-muted card-text mb-4">
                                    Erat netus est hendrerit, nullam et quis ad cras
                                    porttitor iaculis. Bibendum vulputate cras aenean.
                                </p>
                                <button class="btn btn-primary shadow" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <h5 class="fw-bold card-title">Lorem ipsum dolor sit&nbsp;</h5>
                                <p class="text-muted card-text mb-4">
                                    Erat netus est hendrerit, nullam et quis ad cras
                                    porttitor iaculis. Bibendum vulputate cras aenean.
                                </p>
                                <button class="btn btn-primary shadow" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <h5 class="fw-bold card-title">Lorem ipsum dolor sit&nbsp;</h5>
                                <p class="text-muted card-text mb-4">
                                    Erat netus est hendrerit, nullam et quis ad cras
                                    porttitor iaculis. Bibendum vulputate cras aenean.
                                </p>
                                <button class="btn btn-primary shadow" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <h5 class="fw-bold card-title">Lorem ipsum dolor sit&nbsp;</h5>
                                <p class="text-muted card-text mb-4">
                                    Erat netus est hendrerit, nullam et quis ad cras
                                    porttitor iaculis. Bibendum vulputate cras aenean.
                                </p>
                                <button class="btn btn-primary shadow" type="button">more</button>
                            </div>
                        </div>
                        <div class="col mt-3 text-end">
                            <a href="{{ route('rakyat') }}">See More <i class="fa-regular fa-hand-point-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container bg-dark py-5">
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

    <section>
        <div class="container py-5">
            <div class="mx-auto" style="max-width: 900px;">
                <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center">
                    <div class="col mb-4">
                        <div class="card bg-primary-light">
                            <div class="card-body text-center px-4 py-5 px-md-5">
                                <p class="fw-bold text-primary card-text mb-2">Fully Managed</p>
                                <h5 class="fw-bold card-title mb-3">Lorem ipsum dolor sit&nbsp;nullam et quis ad cras
                                    porttitor</h5>
                                <button class="btn btn-primary btn-sm" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card bg-secondary-light">
                            <div class="card-body text-center px-4 py-5 px-md-5">
                                <p class="fw-bold text-secondary card-text mb-2">Fully Managed</p>
                                <h5 class="fw-bold card-title mb-3">Lorem ipsum dolor sit&nbsp;nullam et quis ad cras
                                    porttitor</h5>
                                <button class="btn btn-secondary btn-sm" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-info-light">
                            <div class="card-body text-center px-4 py-5 px-md-5">
                                <p class="fw-bold text-info card-text mb-2">Fully Managed</p>
                                <h5 class="fw-bold card-title mb-3">Lorem ipsum dolor sit&nbsp;nullam et quis ad cras
                                    porttitor</h5>
                                <button class="btn btn-info btn-sm" type="button">Learn more</button>
                            </div>
                        </div>
                        <div class="text-end mt-3 me-2">
                            <a href="{{ route('kearifan') }}">See More <i class="fa-regular fa-hand-point-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container bg-dark py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Lokasi Pedukuhan</p>
                </div>
            </div>
            <div class="py-5 ms-3 p-lg-5">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe
                            src="https://maps.google.com/maps?q=Weru%20Petir%20Kec.%20Rongkop%20Kabupaten%20Gunung%20Kidul%20Daerah%20Istimewa%20Yogyakarta&amp;t=k&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                            frameborder="0" scrolling="no" style="width: 990px; height: 400px;"></iframe>
                        <style>
                            .mapouter {
                                position: relative;
                                height: 400px;
                                width: 990px;
                                background: #fff;
                            }

                            .maprouter a {
                                color: #fff !important;
                                position: absolute !important;
                                top: 0 !important;
                                z-index: 0 !important;
                            }
                        </style><a href="https://blooketjoin.org/">blooket</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                height: 400px;
                                width: 990px
                            }

                            .gmap_canvas iframe {
                                position: relative;
                                z-index: 2
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container mx-auto py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">DEVELOPER</p>
                    <h2 class="fw-bold"><strong>TIM KKN 34 WERU</strong></h2>
                    <h2 class="fw-bold">SANATA DHARMA</h2>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000"
                data-wrap="true">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <img class="d-block mx-auto w-25" src="assets/img/products/3.jpg">
                            <div class="caption-text text-center mt-3 mb-2">
                                <h5>Caption 1</h5>
                                <p>Deskripsi caption 1.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <img class="d-block mx-auto w-25" src="assets/img/products/3.jpg">
                            <div class="caption-text text-center mt-3 mb-2">
                                <h5>Caption 2</h5>
                                <p>Deskripsi caption 2.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <img class="d-block mx-auto w-25" src="assets/img/products/3.jpg">
                            <div class="caption-text text-center mt-3 mb-2">
                                <h5>Caption 3</h5>
                                <p>Deskripsi caption 3.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <img class="d-block mx-auto w-25" src="assets/img/products/3.jpg">
                            <div class="caption-text text-center mt-3 mb-2">
                                <h5>Caption 4</h5>
                                <p>Deskripsi caption 4.</p>
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
                        <form class="p-3 p-xl-4" method="post">
                            <div class="mb-3"><input class="form-control" type="text" id="name-1"
                                    name="name" placeholder="Name"></div>
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
                                <p class="text-muted mb-0">+123456789</p>
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
                                <p class="text-muted mb-0">info@example.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div
                                class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin">
                                    <path
                                        d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282z">
                                    </path>
                                </svg>
                            </div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Location</h6>
                                <p class="text-muted mb-0">12 Example Street</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div
                class="bg-dark border rounded border-dark d-flex flex-column justify-content-between align-items-center flex-lg-row p-4 p-lg-5">
                <div class="text-center text-lg-start py-3 py-lg-1">
                    <h2 class="fw-bold mb-2">Subscribe to our newsletter</h2>
                    <p class="mb-0">Imperdiet consectetur dolor.</p>
                </div>
                <form class="d-flex justify-content-center flex-wrap flex-lg-nowrap" method="post">
                    <div class="my-2"><input class="border rounded-pill shadow-sm form-control" type="email"
                            name="email" placeholder="Your Email"></div>
                    <div class="my-2"><button class="btn btn-primary shadow ms-2" type="submit">Subscribe </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
