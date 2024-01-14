@extends('nav-foot.layout')
@section('isi-content')
    <section>
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Kegiatan Masyarakat</h2>
                    <p class="text-muted">Pada bagian ini Anda akan melihat kegiatan-kegiatan yang dilakukan masyarakat
                        <strong>Pedukuhan Weru</strong>
                    </p>
                </div>
            </div>
            @foreach ($kegiatan as $key => $item)
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    @if ($key % 2 == 0)
                        <div class="col mb-5">
                            <img class="rounded img-fluid shadow" src="{{ asset('storage/' . $item->foto_satu) }}">
                        </div>
                    @endif
                    <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                        <div>
                            <h3 class="fw-bold">{{ $item->title }}</h3>
                            @if ($item->kode_user == $user->id)
                            <p>Penulis: {{ $user->first_name . ' ' . $user->last_name }}</p>
                            <p class="text-muted mb-4">{{ $item->headline }}</p>   
                            @endif
                            <button class="btn btn-primary shadow" type="button">Learn more</button>
                        </div>
                    </div>
                    @if ($key % 2 != 0)
                        <div class="col mb-5">
                            <img class="rounded img-fluid shadow" src="{{ asset('storage/' . $item->foto_satu) }}">
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </section>
@endsection
