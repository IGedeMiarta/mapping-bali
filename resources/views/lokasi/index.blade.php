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
    <div class="row">
        <div class="card col">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="example">
                        <thead class="table-light table-bordered ">
                            <tr>
                                <th>#</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Pengelola</th>
                                <th>HP</th>
                                <th>Email</th>
                                <th>Web</th>
                                <th>Instagram</th>
                                <th>Youtube</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($table as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $item->kategori->category_name }}</td>
                                    <td>{{ $item->place_name }}</td>
                                    <td>{{ $item->place_address }}</td>
                                    <td>{{ $item->lat }}</td>
                                    <td>{{ $item->lng }}</td>
                                    <td>{{ $item->cp }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->web }}</td>
                                    <td>{{ $item->instagram }}</td>
                                    <td>{{ $item->youtube }}</td>
                                    {{-- <td>
                                        <form action="{{ url('category/' . $item->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a class="btn btn-info btn-sm btnEdit" data-id="{{ $item->id }}"
                                                data-name="{{ $item->place_name }}"><i class="lni lni-pencil"></i></a>
                                            <button type="submit" class="btn btn-danger btn-sm btnDelete"><i
                                                    class="lni lni-trash"></i></button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
