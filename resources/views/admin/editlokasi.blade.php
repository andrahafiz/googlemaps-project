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
                        <form action="{{ route('admin.lokasi.update', $data->id_rumahsakit) }}"
                            enctype="multipart/form-data" method="POST">
                            @method('put')
                            {{ csrf_field() }}
                            <div class="form-body">
                                <h5 class="card-title">Form Rumah Sakit</h5>
                                <hr>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">

                                        {{-- <div class="col-lg-12"> --}}
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
                                        <div class="form-group @error('foto_rumahsakit') error @enderror">
                                            <div class="col-lg col-md col-sm">
                                                <div class="white-box text-center"> <img
                                                        src="{{ asset('storage/' . $data->foto_rumahsakit) }}" width="316"
                                                        height="225"class="img-responsive">
                                                </div>
                                            </div>
                                            <label>Upload Image</label>
                                            <input class="form-control" name="foto_rumahsakit" id="image"
                                                type="file" onchange="previewImage()/>
                                            @error('foto_rumahsakit')
                                                <div class="help-block">
                                                    <ul role="alert">
                                                        <li>{{ $message }}</li>
                                                    </ul>
                                                </div>
                                            @enderror
                                        </div>
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
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group @error('latitude_rumahsakit') error @enderror">
                                                    <label>Latitude</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $data->latitude_rumahsakit }}" name="latitude_rumahsakit"
                                                        id="lat">
                                                    @error('latitude_rumahsakit')
                                                        <div class="help-block">
                                                            <ul role="alert">
                                                                <li>{{ $message }}</li>
                                                            </ul>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group @error('longitude_rumahsakit') error @enderror">
                                                    <label>Longitude </label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $data->longitude_rumahsakit }}"
                                                        name="longitude_rumahsakit" id="long">
                                                    @error('longitude_rumahsakit')
                                                        <div class="help-block">
                                                            <ul role="alert">
                                                                <li>{{ $message }}</li>
                                                            </ul>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <div class="w-100 bg-grey" style="height: 100%" id="maps"></div>
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title">Pelayanan Rumah Sakit</h5>
                                            </div>
                                            @if (session()->has('success'))
                                                <div class="alert alert-success">{{ session('success') }}</div>
                                            @endif
                                            <div class="col-2 d-flex justify-content-end align-items-center ">
                                                <a href="javascript:void(0)" id="tambahformlayanan"
                                                    class="btn btn-info d-none d-lg-block m-b-10 addRow"><i
                                                        class="fa fa-plus-circle"></i> Tambah Layanan
                                                </a>
                                            </div>
                                        </div>
                                        <table>
                                            <tbody>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered td-padding" id="formcanvas">
                                                        {{-- // --}}
{{-- {{dd($data->layanans) }} --}}
                                                        {{-- // --}}
                                                        @foreach ($data->layanans as $dt)
                                                            <tr>
                                                                <td>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-0">
                                                                            <select class="form-control custom-select"
                                                                                name="layanan_rumahsakit[]"
                                                                                data-placeholder="Choose a Category"
                                                                                tabindex="1">
                                                                                @foreach ($layanan as $l)
                                                                                <option value="{{ $l->id_layanan }}" @if($l->id_layanan == $dt->id_layanan) selected @endif>{{ $l->nama_layanan }}</option>
                                                                            @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                        name="informasi_layanan[]"
                                                                        name="informasi_rumahsakit"
                                                                        value="{{ $dt->pivot->informasi_layanan }}"
                                                                        placeholder="Isi Informasi Layanan...">
                                                                </td>

                                                                <td style="width: 10%">
                                                                    <div class="col-2 d-flex">
                                                                        <a href="javascript:void(0)"><button type="button"
                                                                                value=""
                                                                                class="btn btn-danger d-none d-lg-block m-l-15 deleteRow"><i
                                                                                    class="  fas fa-minus-circle"></i>
                                                                            </button></a>
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="form-actions m-t-20">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                            Save</button>
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
    <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLEMAP_API_KEY') }}&callback=initMap">
    </script>

    <script>
        //FORM REPEEAT
        $('#tambahformlayanan').on('click', function() {

var tr = "<tr>" +
    "<td>" +
    "<div class='col-md-13'>" +
    "<div class='form-group mb-0'>" +
    "<select class='form-control custom-select' name='layanan_rumahsakit[]'" +
    "data-placeholder='Choose a Category' tabindex='1'>" +
    "  @foreach ($layanan as $l) <option value = "+{{ $l->id_layanan }}+" >{{ $l->nama_layanan }} </option>@endforeach"  +
    "</select>" +
    "</div>" +
    "</div>" +
    "</td>" +
    "<td>" +
    "<input type='text' class='form-control'" +
    "name='informasi_layanan[]'" +
    "placeholder='Isi Informasi Layanan...'>" +
    "</td>" +

    "<td style='width: 10%'>" +
    "<div class='col-2 d-flex'>" +
    "<a href='javascript:void(0)'><button type='button'" +
    "class='btn btn-danger d-none d-lg-block m-l-15 deleteRow'><i class='fas fa-minus-circle'></i>" +
    "</button></a>" +
    "</div>" +
    "</td>" +
    "</tr>";
console.log(tr); $('#formcanvas').append(tr);
});

        $('tbody').on('click', '.deleteRow', function() {

            $(this).parent().parent().parent().parent().remove();

        });
        //END

        //MAP
        const inputLatitude = document.querySelector('#lat');
        const inputLongitude = document.querySelector('#long');

        let lat = {{ $data->latitude_rumahsakit }};
        let lng = {{ $data->longitude_rumahsakit }};

        function init() {
            inputLatitude.value = lat;
            inputLongitude.value = lng;

        };

        function initMap() {
            const mandailing = {
                lat: lat,
                lng: lng

            };

            const map = new google.maps.Map(document.getElementById("maps"), {
                zoom: 15,
                center: mandailing,
                mapTypeControl: false,
                fullscreenControl: false,
                // zoomControl: false,
                streetViewControl: false
            });

            const marker = new google.maps.Marker({
                position: {
                    lat: lat,
                    lng: lng
                },
                draggable: true,
                map: map
            });

            inputLatitude.addEventListener('input', async (e) => {
                lat = e.target.value;

                latLng = {
                    lat: parseFloat(lat),
                    lng: parseFloat(lng)
                };

                updateMarkerAndPanTo(marker, latLng, map);
            });

            inputLongitude.addEventListener('input', (e) => {
                lng = e.target.value;

                latLng = {
                    lat: parseFloat(lat),
                    lng: parseFloat(lng)
                };

                updateMarkerAndPanTo(marker, latLng, map);
            });

            map.addListener("click", (e) => {
                inputLatitude.value = e.latLng.lat();
                inputLongitude.value = e.latLng.lng();

                inputLatitude.dispatchEvent(new Event('input'));
                inputLongitude.dispatchEvent(new Event('input'));
            });
        };

        function updateMarkerAndPanTo(marker, latLng, map) {
            marker.setPosition(latLng);
            map.panTo(latLng);
            map.setZoom(13);
        }

        init();
        window.initMap = initMap;
        //END MAP
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

            //image
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

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

    <script src="{{ asset('assets/dist/js/pages/validation.js') }}"></script>
    <!-- This is data table -->
    <script src="{{ asset('assets/node_modules/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
@endsection

{{-- <script>
        //leaflet 0.509381, 101.448684
        var map = L.map('map').setView([0.509381, 101.448684], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var latInput = document.querySelector("[name=latitude_rumahsakit]");
        var lngInput = document.querySelector("[name=longitude_rumahsakit]");

        var curLocation = [-0.45674492770160435, 101.34848239308646];

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

        
    </script> --}}
