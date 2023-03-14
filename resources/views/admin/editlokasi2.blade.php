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
                <h4 class="text-themecolor">Edit Data Rumah Sakit</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Lokasi Rumah Sakit</a></li>
                        <li class="breadcrumb-item active">Edit Data Rumah Sakit</li>

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
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.lokasi.update', $data->id_rumahsakit) }}" method="POST">
                            @method('put')
                            {{ csrf_field() }}
                            <div class="form-body">
                                <h5 class="card-title">Form Rumah Sakit</h5>
                                <hr>
                                <!--/row-->
                                <div class="row">
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ID Rumah Sakit</label>
                                            <input type="text" class="form-control" name="id_rumahsakit">
                                        </div>
                                    </div> --}}
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group @error('nama_rumahsakit') error @enderror">
                                            <label>Nama Rumah Sakit</label>
                                            <input type="text" class="form-control" value="{{ $data->nama_rumahsakit }}"
                                                name="nama_rumahsakit">
                                            @error('nama_rumahsakit')
                                                <div class="help-block">
                                                    <ul role="alert">
                                                        <li>{{ $message }}</li>
                                                    </ul>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="col-md-3">
                                    <h5 class="card-title m-t-20">Upload Image</h5>
                                    <div class="product-img"> <img src="../assets/images/gallery/chair.jpg">
                                        <div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info"><i
                                                    class="ti-marker-alt"></i></a> <a href="javascript:void(0)"
                                                class="bg-danger"><i class="ti-trash"></i></a></div>
                                        <br />
                                        <div class="fileupload btn btn-info waves-effect waves-light"><span><i
                                                    class="ion-upload m-r-5"></i>Upload Anonther Image</span>
                                            <input type="file" class="upload" name="foto_rumahsakit">
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                                <!--/row-->
                                <div class="row mt-5">
                                    <div class="col-md-6">
                                        <div class="form-group @error('alamat_rumahsakit') error @enderror">
                                            <label>Alamat Rumah Sakit</label>
                                            <input type="text" class="form-control"
                                                value="{{ $data->alamat_rumahsakit }}" name="alamat_rumahsakit">
                                            @error('alamat_rumahsakit')
                                                <div class="help-block">
                                                    <ul role="alert">
                                                        <li>{{ $message }}</li>
                                                    </ul>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group @error('latitude_rumahsakit') error @enderror">
                                            <label>Latitude</label>
                                            <input type="text" class="form-control"
                                                value="{{ $data->latitude_rumahsakit }}" name="latitude_rumahsakit"
                                                id="latitude">
                                            @error('latitude_rumahsakit')
                                                <div class="help-block">
                                                    <ul role="alert">
                                                        <li>{{ $message }}</li>
                                                    </ul>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group @error('longitude_rumahsakit') error @enderror">
                                            <label>Longitude </label>
                                            <input type="text" class="form-control"
                                                value="{{ $data->longitude_rumahsakit }}" name="longitude_rumahsakit"
                                                id="longitude">
                                            @error('longitude_rumahsakit')
                                                <div class="help-block">
                                                    <ul role="alert">
                                                        <li>{{ $message }}</li>
                                                    </ul>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div id="map"></div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="row mt-5">
                                            <div class="col">
                                                <h5 class="card-title m-t-40">Pelayanan Rumah Sakit</h5>
                                            </div>
                                            <div class="col-2 d-flex justify-content-end align-items-center">
                                                <a href=""><button type="button"
                                                        class="btn btn-info d-none d-lg-block m-l-15 "><i
                                                            class="fa fa-plus-circle"></i>
                                                        Tambah Layanan</button></a>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered td-padding">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="col-md-13">
                                                                <div class="form-group ">
                                                                    <select class="form-control custom-select"
                                                                        data-placeholder="Choose a Category" tabindex="1">
                                                                        <option value="Category 1">Pilih Layanan Rumah
                                                                            Sakit</option>
                                                                        <option value="Category 2">Category 2</option>
                                                                        <option value="Category 3">Category 5</option>
                                                                        <option value="Category 4">Category 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="informasi_rumahsakit" placeholder="Stellar">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                placeholder="Delivery Condition">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                placeholder="Knock Down">
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="form-actions m-t-40">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-dark">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- charts -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                </div>
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
                        <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a>
                        </li>
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    </div>
@endsection
@section('js')
    <!-- This is data table -->
    <script src="../assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(function() {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group +
                                '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass(
                'btn btn-primary mr-1');
        });
    </script>
    <script>
        var map = L.map('map').setView([{{ $data->latitude_rumahsakit }}, {{ $data->longitude_rumahsakit }}], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var latInput = document.querySelector("[name=latitude_rumahsakit]");
        var lngInput = document.querySelector("[name=longitude_rumahsakit]");

        var curLocation = [{{ $data->latitude_rumahsakit }}, {{ $data->longitude_rumahsakit }}];

        map.attributionControl.setPrefix(false);

        var marker = new L.marker(curLocation, {
            draggable: 'true',
        });

        var inputLatitude = document.querySelector('#latitude');
        var inputLongitude = document.querySelector('#longitude');

        const updateMarker = (latlng) => {
            marker.setLatLng(latlng);
            return false;
        }

        let lat = inputLatitude.value;
        let long = inputLongitude.value;

        inputLatitude.addEventListener('input', (e) => {
            lat = e.target.value;
            updateMarker([lat, long]);
        });

        inputLongitude.addEventListener('input', (e) => {
            long = e.target.value;
            updateMarker([lat, long]);
        });

        //mengambil koordinat marker pindah
        marker.on('dragend', function(e) {
            var position = marker.getLatLng();
            marker.setLatLng(position, {
                curLocation
            }).bindPopup(position).update();
            $("#latitude_rumahsakit").val(position.lat);
            $("#longitude_rumahsakit").val(position.lng);
        });

        //mengambil coordinat saat map diklik
        map.on("click", function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            if (!marker) {
                marker = L.marker(e.latlng).addTo(map);
            } else {
                marker.setLatLng(e.latlng);
            }
            latInput.value = lat;
            lngInput.value = lng;
        });

        map.addLayer(marker);
    </script>
@endsection
