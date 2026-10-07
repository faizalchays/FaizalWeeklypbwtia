@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <h1>HALAMAN profile</h1>
    <p>Nama : {{ $name }}</p>
    <p>NIM : {{ $nim }}</p>
    <p>Prodi : {{ $prodi }}</p>
    <img src="{{ asset('images/zntsu.png') }}" alt="gambar" width="200px">
@endsection