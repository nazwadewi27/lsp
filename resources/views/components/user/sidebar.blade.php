<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard - Mazer Admin Dashboard</title>
    
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
    
        <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">
    
        <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="/assets/css/app.css">
        <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
</head>
<body>

    {{-- 
                    <li class="sidebar-item active">
                        <a href="{{ route('user.peminjaman') }}">
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Peminjaman</span>
                        </a>
                    </li>

                    <li class="sidebar-item active">
                        <a href="{{ route('user.pengembalian') }}">
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Pengembalian</span>
                        </a>
                    </li>

                    <li class="sidebar-item active">
                        <a href="{{ route('user.pesan') }}">
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Pesan</span>
                        </a>
                    </li>

                    <li class="sidebar-item active">
                        <a href="{{ route('user.profil') }}">
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Profil Saya</span>
                        </a>
                    </li>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div> --}}
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    

                    <li class="sidebar-item active ">
                        <a href="{{ route('user.dashboard') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Peminjaman</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('user.form.peminjaman') }}">Formulir Peminjaman Buku</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('user.riwayat.peminjaman') }}">Riwayat Peminjaman Buku</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Pengembalian</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('user.pengembalian') }}">Formulir Pengembalian</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="extra-component-sweetalert.html">Riwayat Pengembalian Buku</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Pesan</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="form-element-input.html">Pesan Masuk</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-element-input-group.html">Pesan Terkirim</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="form-layout.html" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Profil Saya</span>
                        </a>
                    </li>
                    <li class="sidebar-item  ">
                        <a href="form-layout.html" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
</body>
</html>
