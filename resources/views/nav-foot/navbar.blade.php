<nav class="navbar navbar-expand-md sticky-top py-3 navbar-dark" id="mainNav">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span
                class="bs-icon-sm d-flex justify-content-center align-items-center me-2 bs-icon">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="300%" class="me-4">
            </span>
                <span>WERU</span></a><button data-bs-toggle="collapse" class="navbar-toggler"
            data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('kegiatan') }}">Kegiatan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('kearifan') }}">Kearifan Lokal</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profile Weru</a></li>
            </ul><a class="btn btn-primary shadow" role="button" href="{{ route('login') }}">Login</a>
        </div>
    </div>
</nav>
