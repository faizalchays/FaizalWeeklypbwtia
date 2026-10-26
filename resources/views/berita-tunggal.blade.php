@extends('layouts.main')

@section('title', $berita->judul)

@section('content')
    <article class="text-center">
        <h1>{{ $berita->judul }}</h1>
        <time datetime="{{ $berita->tanggal->format('Y-m-d') }}">{{ $berita->tanggal->format('Y-m-d') }}</time>
        <p>{{ $berita->isi }}</p>
        <a href="{{ route('berita') }}">Kembali ke daftar berita</a>
    </article>
@endsection