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
        <p class="mb-3 fs-3 fw-bold text-dark"><i class="fa-solid fa-user-plus"></i> Registrasi Akun Baru</p>
        <div class="container mt-5">
            <h2 class="mb-4">Form Pendaftaran</h2>
            <form action="{{ route('user-new') }}" method="POST">
                @csrf
                <div class="form-group row mb-3">
                    <div class="col">
                        <input type="text" class="form-control p-2" placeholder="First Name" name="first_name" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control p-2" placeholder="Last Name" name="last_name" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control p-2" id="username" name="username" required placeholder="Username">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control p-2" id="password" name="password" required placeholder="Password" autocomplete="new-password">
                </div>
                <div class="form-group mb-3">
                    <label for="konfirmasi_password">Konfirmasi Password:</label>
                    <input type="password" class="form-control p-2" id="konfirmasi_password" name="konfirmasi_password"
                        required placeholder="Konfirmasi Password" autocomplete="new-password">
                </div>
                <div class="form-group mb-3">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" class="form-control p-2" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <div class="form-group mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select class="form-control p-2" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control p-2" id="alamat" name="alamat" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </main>
@endsection
