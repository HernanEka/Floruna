@extends('Template.Template')

@section('konten')
    <section id="Postingan" class="bg-admin min-vh-100">
        <div class="container py-5">
            {{-- <div class="card h-100 bg-white p-4">
                <div class="card-body text-center">
                    <div class="text-end"><a href="/data/postingan/delete/{{ $posting->id }}"><i
                                class="bi bi-trash-fill fs-3 text-danger"></i></a></div>
                    <h1 class="display-5">{{ $posting->judul }}</h1>
                    <img src="{{ asset('upload/Postingan/' . $posting->gambar) }}" alt="" width="300">
                    <div class="text-center my-2">
                        <p>Lokasi : {{ $posting->lokasi }}</p>
                    </div>
                    <div class="card-text mb-5">
                        {{ $posting->keterangan }}
                    </div>
                    @if ($posting->status == 'Terkonfirmasi')
                        <button disabled="disabled" class="btn btn-success">Terkonfirmasi</button>
                    @endif
                </div>
            </div> --}}
            <div class="row bg-white g-5 my-5">
                <div class="text-end">
                    <a href="/data/postingan/delete/{{ $posting->id }}"><i
                            class="bi bi-trash-fill fs-3 text-danger"></i></a>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 border-0">
                        <img src="{{ asset('upload/Postingan/' . $posting->gambar) }}" class="shadow-lg bg-body mx-auto"
                            width="300" alt="...">
                    </div>
                </div>
                <div class="col">

                    <h1 class="">{{ $posting->judul }}</h1>
                    <p class="mb-4">{{ $posting->lokasi }}</p>
                    <p class="text-justify">
                        {{ Str::limit($posting->keterangan, 1000) }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
