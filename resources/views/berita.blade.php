@extends('layouts.main')

@section('title', 'Berita')

@section('content')
    <h1>Berita</h1>

    @foreach ($beritas as $berita)
        <article class="mb-4">
            <h2><a href="{{ route('berita.show', $berita) }}">{{ $berita->judul }}</a></h2>
            <time datetime="{{ $berita->tanggal->format('Y-m-d') }}">{{ $berita->tanggal->format('Y-m-d') }}</time>
            <p>{{ $berita->isi }}</p>
        </article>
    @endforeach
@endsection