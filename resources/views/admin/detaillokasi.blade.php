@extends('layout_admin.main')
@push('css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css') }}">
@endpush
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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Rumah Sakit</a></li>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><b>{{ $data->nama_rumahsakit }}</b></h3>
                        <div class="row">
                            <div class="col-lg col-md col-sm">
                                <div class="white-box text-center"> <img
                                        src="{{ asset('storage/' . $data->foto_rumahsakit) }}" width="316"
                                        height="225"class="img-responsive">
                                </div>
                            </div>

                            <div class="col-lg col-md col-sm">
                                <h4 class="card-title">Alamat Rumah Sakit:</h4>
                                <p>{{ $data->alamat_rumahsakit }}</p>
                                <h4 class="card-title">Latitude Rumah Sakit:</h4>
                                <p>{{ $data->latitude_rumahsakit }}</p>
                                <h4 class="card-title">Longitude Rumah Sakit:</h4>
                                <p>{{ $data->longitude_rumahsakit }}</p>
                            </div>
                        </div>
                        <div class="row">
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
                                                    <td style="width:35%"> {{ $dt->nama_layanan }} </td>
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
            <div class="col-lg-6">
  <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Map Rumah Sakit Terdekat</h4>
                        <div class="hero-container" style="height: 800px" id="maps"></div>
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
    {{-- <script>
        var map = L.map('map').setView([{{ $data->latitude_rumahsakit }}, {{ $data->longitude_rumahsakit }}], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([{{ $data->latitude_rumahsakit }}, {{ $data->longitude_rumahsakit }}]).addTo(map)
            .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
            .openPopup();
    </script> --}}
@endsection

@section('js')
    <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLEMAP_API_KEY') }}&callback=initMap">
    </script>
    <script>
        //MAP
        function initMap() {
            let lat = {{ $data->latitude_rumahsakit }};
            let lng = {{ $data->longitude_rumahsakit }};
            const center = {
                lat: lat,
                lng: lng
            };

            const map = new google.maps.Map(document.getElementById("maps"), {
                zoom: 17,
                center: center,
                mapTypeControl: false,
                fullscreenControl: false,
                zoomControl: false,
                streetViewControl: false
            });

            const marker = new google.maps.Marker({
                position: center,
                map: map
            });
        }
    </script>
@endsection
