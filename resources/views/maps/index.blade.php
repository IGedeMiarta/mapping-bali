@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body" id="map" style="height: 650px;">

        </div>
    </div>
    {{-- @dd($maps) --}}
@endsection
@push('script')
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
@endpush
