@extends('layouts.app')
@push('widget')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">{{ $title }}</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt me-2"></i></a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Location</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
            </nav>
        </div>
    </div>
@endpush
@section('content')
    <form action="{{ url('location') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- <button type="submit" class="btn btn-primary mb-3"><i class="bx bx-plus"></i> Simpan Produk</button> --}}
        <div class="card">
            <div class="card-body row">
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Nama Tempat<span class="text-danger">*</span></label>
                    <input type="text"
                        class="form-control @error('place_name')
                            is-invalid
                        @enderror"
                        name="place_name" value="{{ $i->place_name ?? old('place_name') }}">
                    @error('place_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Kategori Tempat<span class="text-danger">*</span></label>
                    <select name="category_id"
                        class="form-select @error('category_id')
                            is-invalid
                        @enderror">
                        <option selected disabled>Pilih Kategori</option>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}" @if ($i->category_id ?? old('category_id') == $item->id) selected @endif>
                                {{ $item->category_name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Alamat lengkap<span class="text-danger">*</span></label>
                    <textarea type="text"
                        class="form-control @error('place_address')
                            is-invalid
                        @enderror"
                        name="place_address">{{ $i->place_addres ?? old('place_address') }}</textarea>
                    @error('place_address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Koordinat Tempat</label>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="form-label text-end">Latitude<span
                                    class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control @error('lat')
                            is-invalid
                        @enderror"
                                name="lat" value="{{ $i->lat ?? old('lat') }}" id="latitude" readonly>
                            @error('lat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label text-end">Longitude<span
                                    class="text-danger">*</span></label>

                            <input type="text"
                                class="form-control @error('lng')
                            is-invalid
                        @enderror"
                                name="lng" value="{{ $i->lng ?? old('lng') }}" id="longitude" readonly>
                            @error('lng')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Contact Person<span class="text-danger">*</span></label>
                    <input type="text"
                        class="form-control @error('contact_person')
                            is-invalid
                        @enderror"
                        name="contact_person" value="{{ $i->contact_person ?? old('contact_person') }}" placeholder="Nama">
                    @error('contact_person')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Nomer Hp<span class="text-danger">*</span></label>
                    <input type="text"
                        class="form-control @error('nomor_hp')
                            is-invalid
                        @enderror"
                        name="nomor_hp" value="{{ $i->nomor_hp ?? old('nomor_hp') }}" placeholder="Nomor Hp">
                    @error('nomor_hp')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <hr>
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Email</label>
                    <input type="email"
                        class="form-control @error('email')
                            is-invalid
                        @enderror"
                        name="email" value="{{ $i->email ?? old('email') }}" placeholder="Email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Web</label>
                    <input type="url"
                        class="form-control @error('web')
                            is-invalid
                        @enderror"
                        name="web" value="{{ $i->web ?? old('web') }}" placeholder="www.web-url.com">
                    @error('web')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Instagram</label>
                    <input type="text"
                        class="form-control @error('insta')
                            is-invalid
                        @enderror"
                        name="insta" value="{{ $i->insta ?? old('insta') }}" placeholder="@instagram">
                    @error('insta')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Youtube</label>
                    <input type="text"
                        class="form-control @error('youtube')
                            is-invalid
                        @enderror"
                        name="youtube" value="{{ $i->youtube ?? old('youtube') }}"
                        placeholder="www.youtube.com/youtube">
                    @error('youtube')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-3"><i class="bx bx-plus"></i> Simpan Lokasi</button>
    </form>
@endsection

@push('script')
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            document.getElementById("latitude").value = position.coords.latitude;
            document.getElementById("longitude").value = position.coords.longitude;
        }

        window.onload = getLocation;
    </script>
    <script>
        $(document).ready(function() {
            $('.btnEdit').on('click', function() {
                const id = $(this).data('id');
                const name = $(this).data('name');
                const url = "{{ url('category') }}" + '/' + id;
                $('#forms').attr('action', url);
                var html =
                    `<input type="hidden" name="id" value="${id}"><input type="hidden" name="_method" value="PUT">`;
                $('.addID').append(html);
                $('.name').addClass('is-valid').val(name);
                $('.btnAdd').html('Update')

            })
        })
    </script>
@endpush
