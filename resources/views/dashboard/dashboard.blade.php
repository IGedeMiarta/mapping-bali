@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur numquam quo culpa, libero cupiditate cumque
            maxime quasi et placeat fugit ab velit rem? Quis eos cupiditate corrupti quisquam, omnis voluptatibus laudantium
            consequatur cumque, quidem dicta distinctio soluta non harum est tempore! Voluptatibus praesentium
            necessitatibus nihil ipsa error distinctio sapiente laudantium. Vel tenetur possimus inventore cum ipsam natus
            ad quaerat sit perferendis voluptatibus expedita nobis numquam quo ratione quibusdam, eos cupiditate ex debitis
            impedit alias dolor non dicta error deserunt! Qui ratione distinctio cupiditate cum, perspiciatis placeat sed
            accusamus, iusto architecto atque quisquam officia exercitationem laboriosam dolorem id quis temporibus
            doloremque?
        </div>
    </div>
    <!--end row-->
    {{-- <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Sales Overview</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i
                                    class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="chart-container-0">
                        <canvas id="chart7"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Order Status</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i
                                    class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="chart-container-0">
                        <canvas id="chart-order-status"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--end row-->

    {{-- <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Sales Overview</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i
                                    class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
                        <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1"
                                style="color: #14abef"></i>Sales</span>
                        <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1"
                                style="color: #ffc107"></i>Visits</span>
                    </div>
                    <div class="chart-container-1">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
                    <div class="col">
                        <div class="p-3">
                            <h5 class="mb-0">24.15M</h5>
                            <small class="mb-0">Overall Visitor <span> <i class="bx bx-up-arrow-alt align-middle"></i>
                                    2.43%</span></small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <h5 class="mb-0">12:38</h5>
                            <small class="mb-0">Visitor Duration <span> <i class="bx bx-up-arrow-alt align-middle"></i>
                                    12.65%</span></small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <h5 class="mb-0">639.82</h5>
                            <small class="mb-0">Pages/Visit <span> <i class="bx bx-up-arrow-alt align-middle"></i>
                                    5.62%</span></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Trending Products</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i
                                    class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="chart-container-2 mt-4">
                        <canvas id="chart2"></canvas>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        Jeans <span class="badge bg-success rounded-pill">25</span>
                    </li>
                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        T-Shirts <span class="badge bg-danger rounded-pill">10</span>
                    </li>
                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        Shoes <span class="badge bg-primary rounded-pill">65</span>
                    </li>
                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        Lingerie <span class="badge bg-warning text-dark rounded-pill">14</span>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!--end row-->



    <!--end row-->
@endsection
@push('script')
    <script src="{{ asset('thame') }}/assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="{{ asset('thame') }}/assets/plugins/chartjs/js/Chart.extension.js"></script>
@endpush
