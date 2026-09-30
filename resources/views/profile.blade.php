<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>

    <!-- Tambahkan kode navigasi ini -->
    <nav>
        <a href="{{ url('/') }}">Home</a> | 
        <a href="{{ url('/profile') }}">Profile</a> | 
        <a href="{{ url('/contact') }}">Contact</a> | 
        <a href="{{ url('/berita') }}">Berita</a>
    </nav>
    <hr>

    <!-- Kode lama kamu tetap ada di bawah sini -->
    <h1>HALAMAN profile</h1>
    <p>Nama : Faizal</p>
    <p>NIM : 13242520020</p>
    <p>Prodi : Teknologi Informasi</p>
   <img src="{{ asset('images/zntsu.png') }}" alt="gambar" width="200px">

</body>
</html>