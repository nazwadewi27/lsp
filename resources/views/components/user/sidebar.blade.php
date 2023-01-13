<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="width: 10%; height: 100%;">
        <ul>
            <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('user.peminjaman') }}">Peminjaman</a></li>
            <li><a href="{{ route('user.pengembalian') }}">Pengembalian</a></li>
            <li><a href="{{ route('user.pesan') }}">Pesan</a></li>
            <li><a href="{{ route('user.profil') }}">Profil Saya</a></li>
        </ul>
    </div>
</body>
</html>
