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
        <p class="mb-3 fs-3 fw-bold text-dark"><i class="fa-solid fa-book"></i></i> Daftar Postingan</p>
        <div class="table">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center">Judul</th>
                        <th rowspan="2" class="text-center">Kategori</th>
                        <th rowspan="2" class="text-center">Penulis</th>
                        <th rowspan="2" class="text-center">Headline</th>
                        <th colspan="3" class="text-center">Aksi</th>
                    </tr>
                    <tr style="display:none">
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posting as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->kategori->kategori_name }}</td>
                            @foreach ($users as $user)
                                @if ($post->kode_user == $user->id)
                                    <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                @endif
                            @endforeach
                            <td class="text-wrap">{{ $post->headline }}</td>
                            <td>
                                <a href="{{ route('show-post', ['slug' => $post->slug, 'kode_user' => $post->kode_user]) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('edit-post', ['slug' => $post->slug, 'kode_user' => $post->kode_user]) }}" class="btn btn-dark"><i class="fa-solid fa-pencil"></i></a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
