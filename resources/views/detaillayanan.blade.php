@extends('layout.main')
@section('container')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Detail Rumah Sakit</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pelayanan Rumah Sakit</a></li>
                        <li class="breadcrumb-item active">Detail Rumah Sakit</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box Content -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- charts -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><b>{{ $data->nama_rumahsakit }}</b></h3>
                        <div class="row">
                            <div class="col-lg-5 col-md-3 col-sm-6">
                                <div class="white-box text-center align-middle">
                                    <img src="{{ asset('storage/' . $data->foto_rumahsakit) }}"
                                        class="img-responsive img-thumbnail w-100 h-100">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-9 col-sm-6">
                                <h4 class="card-title">Alamat Rumah Sakit:</h4>
                                <p>{{ $data->alamat_rumahsakit }}</p>
                                <h4 class="card-title">Latitude Rumah Sakit:</h4>
                                <p>{{ $data->latitude_rumahsakit }}</p>
                                <h4 class="card-title">Longitude Rumah Sakit:</h4>
                                <p>{{ $data->longitude_rumahsakit }}</p>
                                <a href="{{ route('layanan.route_detail', $data->id_rumahsakit ) }}" class="btn btn-outline-success btn-rounded"><i
                                        class="fas fa-location-arrow"></i> Rute</a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3 class="box-title m-t-40">Daftar Pelayanan</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>

                                                <td width="390">
                                                    <dt> Nama Layanan </dt>
                                                </td>
                                                <td>
                                                    <dt>Informasi Layanan </dt>
                                                </td>

                                            </tr>
                                            @foreach ($data->layanans as $dt)
                                                <tr>
                                                    {{-- <td>Nama Layanan</td> --}}
                                                    <td> {{ $dt->nama_layanan }} </td>
                                                    <td> {{ $dt->pivot->informasi_layanan }} </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme working">1</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
@endsection
