@extends('layouts.app')
@push('widget')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">{{ $title }}</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt me-2"></i></a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Master Data</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
            </nav>
        </div>
    </div>
@endpush
@section('content')
    <div class="row">
        <div class="card col-md-3 me-2">
            <form action="" method="POST" id="forms">
                <div class="card-body h5">
                    Tambah {{ $title }}
                </div>
                <hr>
                <div class="card-body">
                    <div class="addID"></div>
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Kategori<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control name" name="category_name" placeholder="exp: Griya">
                    </div>
                    <button class="btn btn-primary btnAdd" type="submit">Tambah</button>
                </div>
            </form>
        </div>
        <div class="card col">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0" id="example">
                        <thead class="table-light table-bordered ">
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($table as $item)
                                <tr>
                                    <td>{{ $item->category_name }}</td>
                                    <td>
                                        <form action="{{ url('category/' . $item->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a class="btn btn-info btn-sm btnEdit" data-id="{{ $item->id }}"
                                                data-name="{{ $item->category_name }}"><i class="lni lni-pencil"></i></a>
                                            <button type="submit" class="btn btn-danger btn-sm btnDelete"><i
                                                    class="lni lni-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
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
