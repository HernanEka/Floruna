@extends('Template.Template')

@section('konten')
    <section id="Postingan" class="bg-admin min-vh-100">
        <div class="container py-5">
            <div class="card h-100 bg-white p-4">
                <div class="card-body text-center">
                    <h1 class="display-5">{{ $news->judul }}</h1>
                    <img src="{{ asset('upload/Postingan/' . $news->gambar) }}" alt="" width="300">
                    <div class="text-center my-2">
                        <p>Lokasi : {{ $news->lokasi }}</p>
                    </div>
                    <div class="card-text mb-5">
                        {{ $news->keterangan }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
