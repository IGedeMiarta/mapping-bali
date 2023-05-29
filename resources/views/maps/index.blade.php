@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body" id="map" style="height: 650px;">

        </div>
    </div>
@endsection
@push('script')
    <script>
        const map = L.map('map').setView([-8.449936376881986, 115.07676747906628], 10);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker = L.marker([-8.635241866342914, 115.1884899907296]).addTo(map).bindPopup(
            'Test, Ini Test Maps dan koordinat');
    </script>
@endpush
