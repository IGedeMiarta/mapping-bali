<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    {{-- <link rel="icon" href="{{ asset('thame') }}/assets/images/favicon-32x32.png" type="image/png" /> --}}
    <!-- loader-->
    <link href="{{ asset('thame') }}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('thame') }}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('thame') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('thame') }}/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('thame') }}/assets/css/app.css" rel="stylesheet">
    <link href="{{ asset('thame') }}/assets/css/icons.css" rel="stylesheet">
    <title>{{ $title ?? ':)' }} - {{ env('APP_NAME') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{ asset('leaflet') }}/leaflet.css" />
    <script src="{{ asset('leaflet') }}/leaflet.js"></script>
    <style>
        #map {
            width: 1500px;
        }
    </style>
</head>

<body>
    <header class="login-header shadow">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo-img.png" width="140" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                    aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"> <a class="nav-link active" aria-current="page"
                                href="{{ url('dashboard') }}"><i class='bx bx-home-alt me-1'></i>Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- wrapper -->
    <div class="wrapper mt-5">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div style="width: 1300px;height: 600px;" id="map"></div>
        </div>
        <footer class="bg-white shadow-sm border-top p-2 text-center fixed-bottom">
            <p class="mb-0">Copyright © 2023 <a href="#">{{ env('APP_NAME') }}</a>. All rights reserved.</p>
        </footer>
    </div>

    <!-- end wrapper -->
    <script>
        const map = L.map('map').setView([-8.449936376881986, 115.07676747906628], 10);
        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        $.ajax({
            url: "{{ url('maps') }}",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Process the data returned from the API
                $.each(data, function(index, item) {
                    var textbox = `<div>
                                <strong>Nama:</strong>
                                <span id="name">${item.place_name}</span>
                                </div>

                                <div>
                                <strong>Alamat:</strong>
                                <span id="address">${item.place_address}</span>
                                </div>

                                <div>
                                <strong>Pengelola:</strong>
                                <span id="person">${item.cp}</span>
                                </div>

                                <div>
                                <strong>Hp:</strong>
                                <span id="phone">${item.phone}</span>
                                </div>

                                <div>
                                <strong>Web:</strong>
                                <span id="instagram">${item.web}</span>
                                </div>

                                <div>
                                <strong>Instagram:</strong>
                                <span id="instagram">${item.instagram}</span>
                                </div>

                                <div>
                                <strong>YouTube:</strong>
                                <span id="instagram">${item.youtube}</span>
                                </div>
                                `;
                    var marker = L.marker([item.lat, item.lng]).addTo(map)
                        .bindPopup(textbox);
                });
            },
            error: function(error) {
                // Handle any errors that occurred during the request
                console.log('Error:', error);
            }
        });
    </script>
</body>

</html>
