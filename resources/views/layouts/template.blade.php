<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!--Leaflet CSS-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!--Bootsrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!--Fontawesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Montserrat:wght@500&display=swap"
        rel="stylesheet">

    @yield('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('frontend/img/logo/mabadest.png') }}" alt="Logo" style="height: 35px; width: auto; margin-right: 2px;">
                {{ $title }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('landing') }}"><i
                                class="fa-solid fa-house"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}"><i class="fa-solid fa-map-location-dot"></i></i>Map</a>
                    </li>

                    <li><a class="nav-link active" aria-current="page" href="{{ route('table-point') }}"><i class="fa-solid fa-map-pin"></i> Destinasi Wisata</a></li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="fa-solid fa-table"></i>
                            Destinasi Wisata
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('table-point') }}"><i
                                        class="fa-solid fa-table"></i> Table Points</a></li>
                            <li><a class="dropdown-item" href="{{ route('table-polyline') }}"><i
                                        class="fa-solid fa-table"></i> Table
                                    Polyline</a></li>
                            <li><a class="dropdown-item" href="{{ route('table-polygon') }}"><i
                                        class="fa-solid fa-table"></i> Table
                                    Polygon</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#infoModal"><i
                                class="fa-solid fa-circle-info"></i> Info</a>
                    </li>

                    @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}"><i class="fa-regular fa-newspaper"></i>
                                Dashboard</a>
                        </li>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li class="nav-item">
                                <button class="nav-link text-danger" type="submit"><i
                                        class="fa-solid fa-right-to-bracket"></i>
                                    Logout</a>
                            </li>
                        </form>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('login') }}"><i
                                    class="fa-solid fa-right-to-bracket"></i> Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> <!-- Menambah class modal-dialog-centered untuk membuat modal berada di tengah -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center"><strong>Welcome to My MABADEST<br>Manggarai Barat Destination</strong></p>
                <p class="text-justify">Website ini didesain untuk memberikan informasi mengenai destinasi wisata, tempat menarik, dan keindahan alam yang tersembunyi di Manggarai Barat, Nusa Tenggara Timur.</p>
                <p class="text-justify">Nikmati fitur pencarian lokasi, navigasi interaktif, dan berbagai konten menarik lainnya untuk membantu Anda merencanakan perjalanan yang sempurna.</p>
                <p class="text-justify">Jelajahi kekayaan budaya, panorama alam, serta beragam pengalaman seru yang ditawarkan oleh Manggarai Barat melalui Sistem Informasi Wisata ini.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



    @yield('content')

    <!--Leaflet JS-->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <!--jQuery jS-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!--Bootsrap jS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @include('components.toast')

    @yield('script')
</body>
</html>
