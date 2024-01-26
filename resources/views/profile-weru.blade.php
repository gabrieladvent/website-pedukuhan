<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Weru | {{ $title }}</title>
    <link href="{{ asset('assets/img/icon.png') }}" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">


</head>

<body style="background-color: #2d2c38; color:rgb(255, 255, 255)">
    <nav class="navbar navbar-expand-md sticky-top py-3 navbar-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <span>WERU</span></a>
                <span class="bs-icon-sm d-flex justify-content-center align-items-center me-2 bs-icon">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="300%" class="">
                </span>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kegiatan') }}">Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kearifan') }}">Kearifan Lokal</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profil Weru</a></li>
                </ul><a class="btn btn-primary shadow" role="button" href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </nav>
    

    <div>
        <section>
            <div class="container py-5">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2 class="fw-bold">Profil Pedukuhan Weru</h2>
                    </div>
                </div>

                <div class="content">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card bg-white text-dark">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-1">
                                                <i class="fa-solid fa-person fa-2xl fs-1"></i>
                                                <span class="count fw-bold fs-3">530</span>
                                                <div class="stat-heading fs-5 ms-4">Penduduk</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card bg-white text-dark">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-1">
                                                <i class="fa-solid fa-house-chimney-window fa-2xl"></i>
                                                <span class="count fw-bold fs-3">4</span>
                                                <div class="stat-heading fs-5 ms-5">RT</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card bg-white text-dark">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-1">
                                                <i class="fa-solid fa-business-time fa-2xl"></i>
                                                <span class="count fw-bold fs-3">4</span>
                                                <div class="stat-heading fs-5 ms-5">UMKM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card bg-white text-dark">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-1">
                                                <i class="fa-solid fa-signs-post fa-2xl"></i>
                                                <span class="count fw-bold fs-3">6</span>
                                                <div class="stat-heading fs-5 ms-5">Fasilitas</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Pekerjaan Warga --}}
                    <div class="row mt-5 shadowed-row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="box-title ms-3 mt-3 fw-bold fs-3">Pekerjaan Warga</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="singelBarChart"></canvas>
                                </div>
                                <div class="card-body"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Usia produktif dan jumlah warga rt --}}
                    <div class="row mt-5 shadowed-row">
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h4 class="box-title ms-3 mt-3 fw-bold fs-3">Usia Produktif</h4>
                                    <p style="color: transparent">haha</p>
                                </div>
                                <div class="card-body">
                                    <canvas id="doughnutChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card custom-card mb-3">
                                <div class="card-body">
                                    <h4 class="box-title ms-3 mt-3 fw-bold fs-3">Jumlah Warga Tiap RT*</h4>
                                    <p class="ms-3">*Dalam satuan jiwa</p>
                                </div>
                                <div class="card-body">
                                    <canvas id="pieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- umkm --}}
                    <div class="mt-5 shadowed-row">
                        <h4 class="box-title ms-3 mt-5 fw-bold fs-3">UMKM</h4>
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <h5>Toko Kelontong</h5>
                                        <div class="slideshow-container">
                                            <div class="mySlides fade">
                                                <div class="numbertext">1 / 3</div>
                                                <img src="{{ asset('assets/img/developer/indah.jpg') }}"
                                                    style="width:100%" alt="foto produk">
                                                <div class="text">Caption Text</div>
                                            </div>
                                            <div class="mySlides fade">
                                                <div class="numbertext">2 / 3</div>
                                                <img src="{{ asset('assets/img/developer/caesil.jpg') }}"
                                                    style="width:100%" alt="foto produk">
                                                <div class="text">Caption Two</div>
                                            </div>
                                            <div class="mySlides fade">
                                                <div class="numbertext">3 / 3</div>
                                                <img src="{{ asset('assets/img/developer/nadila.jpg') }}"
                                                    style="width:100%" alt="foto produk">
                                                <div class="text">Caption Three</div>
                                            </div>
                                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                                            <a class="next" onclick="plusSlides(1)">❯</a>
                                        </div>
                                        <br>
                                        <div style="text-align:center">
                                            <span class="dot" onclick="currentSlide(1)"></span>
                                            <span class="dot" onclick="currentSlide(2)"></span>
                                            <span class="dot" onclick="currentSlide(3)"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <h5>Pengrajin Tempe</h5>
                                    </div>

                                    <div class="slideshow-container">
                                        <div class="mySlidesDua fade">
                                            <div class="numbertext">1 / 3</div>
                                            <img src="{{ asset('assets/img/developer/yanto.jpg') }}"
                                                style="width:100%" alt="foto produk">
                                            <div class="text">Caption Text</div>
                                        </div>
                                        <div class="mySlidesDua fade">
                                            <div class="numbertext">2 / 3</div>
                                            <img src="{{ asset('assets/img/developer/yoan.jpg') }}"
                                                style="width:100%" alt="foto produk">
                                            <div class="text">Caption Two</div>
                                        </div>
                                        <div class="mySlidesDua fade">
                                            <div class="numbertext">3 / 3</div>
                                            <img src="{{ asset('assets/img/developer/gab.jpg') }}" style="width:100%"
                                                alt="foto produk">
                                            <div class="text">Caption Three</div>
                                        </div>
                                        <a class="prev" onclick="plusSlidesDua(-1)">❮</a>
                                        <a class="next" onclick="plusSlidesDua(1)">❯</a>
                                    </div>
                                    <br>
                                    <div style="text-align:center">
                                        <span class="dotDua" onclick="currentSlideDua(1)"></span>
                                        <span class="dotDua" onclick="currentSlideDua(2)"></span>
                                        <span class="dotDua" onclick="currentSlideDua(3)"></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <h5>Penggiling Beras</h5>
                                    </div>
                                    <div class="slideshow-container">
                                        <div class="mySlidesTiga fade">
                                            <div class="numbertext">1 / 3</div>
                                            <img src="{{ asset('assets/img/developer/indah.jpg') }}"
                                                style="width:100%" alt="foto produk">
                                            <div class="text">Caption Text</div>
                                        </div>
                                        <div class="mySlidesTiga fade">
                                            <div class="numbertext">2 / 3</div>
                                            <img src="{{ asset('assets/img/developer/nadila.jpg') }}"
                                                style="width:100%" alt="foto produk">
                                            <div class="text">Caption Two</div>
                                        </div>
                                        <div class="mySlidesTiga fade">
                                            <div class="numbertext">3 / 3</div>
                                            <img src="{{ asset('assets/img/developer/saras.jpg') }}"
                                                style="width:100%" alt="foto produk">
                                            <div class="text">Caption Three</div>
                                        </div>
                                        <a class="prev" onclick="plusSlidesTiga(-1)">❮</a>
                                        <a class="next" onclick="plusSlidesTiga(1)">❯</a>
                                    </div>
                                    <br>
                                    <div style="text-align:center">
                                        <span class="dotTiga" onclick="currentSlideTiga(1)"></span>
                                        <span class="dotTiga" onclick="currentSlideTiga(2)"></span>
                                        <span class="dotTiga" onclick="currentSlideTiga(3)"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <h5>Mebel Kayu</h5>
                                    </div>
                                    <div class="slideshow-container">
                                        <div class="mySlidesEmpat fade">
                                            <div class="numbertext">1 / 3</div>
                                            <img src="{{ asset('assets/img/developer/bram.jpg') }}"
                                                style="width:100%" alt="foto produk">
                                            <div class="text">Caption Text</div>
                                        </div>
                                        <div class="mySlidesEmpat fade">
                                            <div class="numbertext">2 / 3</div>
                                            <img src="{{ asset('assets/img/developer/caesil.jpg') }}"
                                                style="width:100%" alt="foto produk">
                                            <div class="text">Caption Two</div>
                                        </div>
                                        <div class="mySlidesEmpat fade">
                                            <div class="numbertext">3 / 3</div>
                                            <img src="{{ asset('assets/img/developer/dani.jpg') }}"
                                                style="width:100%" alt="foto produk">
                                            <div class="text">Caption Three</div>
                                        </div>
                                        <a class="prev" onclick="plusSlidesEmpat(-1)">❮</a>
                                        <a class="next" onclick="plusSlidesEmpat(1)">❯</a>
                                    </div>
                                    <br>
                                    <div style="text-align:center">
                                        <span class="dotEmpat" onclick="currentSlideEmpat(1)"></span>
                                        <span class="dotEmpat" onclick="currentSlideEmpat(2)"></span>
                                        <span class="dotEmpat" onclick="currentSlideEmpat(3)"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- fasilitas --}}
                    <div class="mt-5 shadowed-row">
                        <h4 class="box-title ms-3 mt-5 fw-bold fs-3">Fasilitas</h4>
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="card custom-card mb-3">
                                    <div class="card-body">
                                        <h5>Mesjid I</h5>
                                        <div class="scroll-container">
                                            <img src="{{ asset('assets/img/products/1.jpg') }}" alt="Cinque Terre"
                                                width="600" height="400">
                                            <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Forest"
                                                width="600" height="400">
                                            <img src="{{ asset('assets/img/products/3.jpg') }}" alt="Northern Lights"
                                                width="600" height="400">
                                            <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Mountains"
                                                width="600" height="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card custom-card mb-3">
                                    <div class="card-body">
                                        <h5>Karawitan</h5>
                                    </div>
                                    <div class="scroll-container">
                                        <img src="{{ asset('assets/img/products/1.jpg') }}" alt="Cinque Terre"
                                            width="600" height="400">
                                        <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Forest"
                                            width="600" height="400">
                                        <img src="{{ asset('assets/img/products/3.jpg') }}" alt="Northern Lights"
                                            width="600" height="400">
                                        <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Mountains"
                                            width="600" height="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="card custom-card mb-3">
                                    <div class="card-body">
                                        <h5>Balai Desa</h5>
                                        <div class="scroll-container">
                                            <img src="{{ asset('assets/img/products/1.jpg') }}" alt="Cinque Terre"
                                                width="600" height="400">
                                            <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Forest"
                                                width="600" height="400">
                                            <img src="{{ asset('assets/img/products/3.jpg') }}" alt="Northern Lights"
                                                width="600" height="400">
                                            <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Mountains"
                                                width="600" height="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card custom-card mb-3">
                                    <div class="card-body">
                                        <h5>Balai RT 26</h5>
                                    </div>
                                    <div class="scroll-container">
                                        <img src="{{ asset('assets/img/products/1.jpg') }}" alt="Cinque Terre"
                                            width="600" height="400">
                                        <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Forest"
                                            width="600" height="400">
                                        <img src="{{ asset('assets/img/products/3.jpg') }}" alt="Northern Lights"
                                            width="600" height="400">
                                        <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Mountains"
                                            width="600" height="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="card custom-card mb-3">
                                    <div class="card-body">
                                        <h5>Paud</h5>
                                        <div class="scroll-container">
                                            <img src="{{ asset('assets/img/products/1.jpg') }}" alt="Cinque Terre"
                                                width="600" height="400">
                                            <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Forest"
                                                width="600" height="400">
                                            <img src="{{ asset('assets/img/products/3.jpg') }}" alt="Northern Lights"
                                                width="600" height="400">
                                            <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Mountains"
                                                width="600" height="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card custom-card mb-3">
                                    <div class="card-body">
                                        <h5>Lapangan Voli</h5>
                                    </div>
                                    <div class="scroll-container">
                                        <img src="{{ asset('assets/img/products/1.jpg') }}" alt="Cinque Terre"
                                            width="600" height="400">
                                        <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Forest"
                                            width="600" height="400">
                                        <img src="{{ asset('assets/img/products/3.jpg') }}" alt="Northern Lights"
                                            width="600" height="400">
                                        <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Mountains"
                                            width="600" height="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="text-center text-white bg-dark">
        <div class="container">
            <br class="my-3">
            <section class="mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <p>
                            Website ini masih jauh dari kesempurnaan, tetapi inilah hasil karya kami untuk Weru.
                            Harapannya, website ini dapat digunakan dengan sebaik-baiknya untuk mencari informasi
                            dan referensi bagi masyarakat luas. Terima kasih dan selamat menikmati!
                        </p>
                    </div>
                </div>
            </section>
            <section class="text-center mb-5">
                <a href="https://wa.me/6281284115265" target="_blank" class="text-white me-4">
                    <i class="fa-solid fa-message"></i>
                </a>
                <a href="https://www.instagram.com/67weru?igsh=czRoYTlqZWVoa3dl" target="_blank"
                    class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://github.com/gabrieladvent" target="_blank" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Copyright:
            <strong><span>KKN 34 Weru</span></strong> | Universitas Sanata Dharma
        </div>
    </footer>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bold-and-dark.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    {{-- <script src="{{ asset('assetss/js/main.js') }}"></script> --}}
    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <script src="{{ asset('assets/js/profile.js') }}"></script>
</body>

</html>
