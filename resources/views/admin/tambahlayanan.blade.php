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
                <h4 class="text-themecolor">Tambah Data Layanan Rumah Sakit</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Layanan Rumah Sakit</a></li>
                        <li class="breadcrumb-item active">Tambah Data Layanan Rumah Sakit</li>

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
                        <form action="{{ route('admin.layanan.store') }}" enctype="multipart/form-data" method="POST">
                            @method('post')
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
                                        <div class="form-group @error('nama_layanan') error @enderror m-b-5">
                                            <label>Nama Layanan Rumah Sakit</label>
                                            <input type="text" class="form-control" name="nama_layanan">
                                            @error('nama_layanan')
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
                            </div>
                            <div class="form-actions m-t-5">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-dark">Cancel</button>
                            </div>
                            </div>
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
    <script>
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
        $('thead').on('click', '.addRow', function() {
            alert('TES');
            var tr = "<tr>" +
                "<td>" +
                "<div class='col-md-13'>" +
                "<div class='form-group mb-0'>" +
                "<select class='form-control custom-select'" +
                "data-placeholder='Choose a Category' tabindex='1'>" +
                "<option value='Category 1'>Pilih Layanan Rumah" +
                "Sakit</option>" +

                "<option value='Category 2'>Category 2</option>" +
                "</select>" +
                "</div>" +
                "</div>" +
                "</td>" +
                "<td>" +
                "<input type='text' class='form-control'" +
                "name='informasi_rumahsakit'" +
                "placeholder='Isi Informasi Layanan...'>" +
                "</td>" +

                "<td style='width: 10%'>" +
                "<div class='col-2 d-flex'>" +
                "<a href='javascript:void(0)'><button type='button'" +
                "class='btn btn-danger d-none d-lg-block m-l-15 deleteRow'><i" +
                "class='fas fa-minus-circle'></i>" +
                "</button></a>" +
                "</div>" +
                "</td>" +
                "</tr>" +
                $('tbody').append(tr);
        });

        $('tbody').on('click', '.deleteRow', function() {

            $(this).parent().parent().parent().parent().remove();

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
@endsection
