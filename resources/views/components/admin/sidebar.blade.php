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
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.peminjaman') }}">Peminjaman</a></li>
            <li><a href="{{ route('admin.pengembalian') }}">Pengembalian</a></li>
            <li><a href="{{ route('admin.pesan') }}">Pesan</a></li>
            <li><a href="{{ route('admin.profile') }}">Profile</a></li>
        </ul>
    </div>
</body>
</html>l