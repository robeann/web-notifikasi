<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Notifikasi | @yield('title')</title>

    {{-- Tabler.IO --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-flags.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-payments.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-vendors.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet">


</head>

<body>

    <div class="page">
        <!-- Sidebar -->
        <aside class="navbar navbar-vertical navbar-expand-sm navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand text-center navbar-brand-autodark">
                    <a href="#">
                        {{-- <img src="..." width="110" height="32" alt="Tabler" class="navbar-brand-image"> --}}
                        <p>Web Notifikasi</p>
                    </a>
                </h1>
                <div class="collapse navbar-collapse" id="sidebar-menu">
                    <ul class="navbar-nav pt-lg-1">
                        <li class="nav-item">
                            <a class="nav-link" href="./">
                                <span class="nav-link-title">
                                    Home
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('data-stnk.view') }}">
                                <span class="nav-link-title">
                                    Data STNK
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('data-kir.view') }}">
                                <span class="nav-link-title">
                                    Data KIR
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('data-kendaraan.view') }}">
                                <span class="nav-link-title">
                                    Data Kendaraan
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="nav-link-title">
                                    Management User
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        @yield('content')
    </div>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>

    {{-- Tabler.IO --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
</body>


</html>
