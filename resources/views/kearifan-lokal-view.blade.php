@extends('nav-foot.layout')
@section('isi-content')

    {{-- Tampilan pertama --}}
    <section>
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">KEARIFAN LOKAL</h2>
                    <p class="text-muted">Kearifan lokal ini telah lama ada di masyarakat
                        <strong>Pedukuhan Weru</strong> dan didapatkan dari hasil wawancara juru kunci dan sesepuh.
                    </p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                @foreach ($kearifan as $cerita)
                    <div class="col mb-4">
                        <div>
                            <a href="#">
                                <img class="rounded img-fluid shadow w-100 fit-cover" src="{{ asset('storage/' . $cerita->foto_satu) }}" style="height: 250px;">
                            </a>
                            <div class="py-4">
                                <span class="badge bg-primary mb-2">{{ optional($cerita->subKategori)->sub_name }}</span>
                                <h4 class="fw-bold">{{ $cerita->title }}</h4>
                                <p class="text-muted">{{ $cerita->headline }}</p>
                                <a href="{{ route('read', ['slug' => $cerita->slug, 'kode_user' => $cerita->kode_user]) }}" class="btn btn-primary shadow">Lanjut Baca</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Tampilan kedua --}}
    {{-- <section>
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">KEARIFAN LOKAL</h2>
                    <p class="text-muted">Kearifan lokal ini telah lama ada di masyarakat
                        <strong>Pedukuhan Weru</strong> dan didapatkan dari hasil wawancara juru kunci dan sesepuh.
                    </p>
                </div>
            </div>

            @php
                $groupedKearifan = $kearifan->groupBy('id_sub');
            @endphp

            @foreach ($groupedKearifan as $idSub => $ceritas)
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    @foreach ($ceritas as $cerita)
                        <div class="col mb-4">
                            <div>
                                <a href="#">
                                    <img class="rounded img-fluid shadow w-100 fit-cover"
                                        src="{{ asset('storage/' . $cerita->foto_satu) }}" style="height: 250px;">
                                </a>
                                <div class="py-4">
                                    <span
                                        class="badge bg-primary mb-2">{{ optional($cerita->subKategori)->sub_name }}</span>
                                    <h4 class="fw-bold">{{ $cerita->title }}</h4>
                                    <p class="text-muted">{{ $cerita->headline }}</p>
                                    <a href="#" class="btn btn-primary shadow mb-2">See More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section> --}}
@endsection
