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
                <h4 class="text-themecolor">Layanan Rumah Sakit</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Layanan Rumah Sakit</li>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h4 class="card-title">Table Layanan Rumah Sakit</h4>
                            </div>
                            <div class="col-2 d-flex justify-content-end align-items-center">
                                <a href="{{ route('admin.layanan.create') }}"><button type="button"
                                        class="btn btn-info d-none d-lg-block m-l-15 "><i class="fa fa-plus-circle"></i>
                                        Tambah Layanan</button></a>
                            </div>
                        </div>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="table product-overview" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Layanan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($dtLayanan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_layanan }}</td>
                                            <td>
                                                <a href="{{ route('admin.layanan.edit', $item->id_layanan) }}"
                                                    class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i
                                                        class="ti-marker-alt"></i></a>
                                                <a type="submit" role="button" class="text-inverse border-0"
                                                    onclick="event.preventDefault();
                                                        document.getElementById('delete{{ $item->id_layanan }}').submit();"
                                                    title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a>
                                                <form method="POST" {{-- class="btn btn-danger btn-sm p-2 sweet" --}}
                                                    id="delete{{ $item->id_layanan }}"
                                                    action="{{ route('admin.layanan.destroy', $item->id_layanan) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                                {{-- <form method="POST" class="d-inline text-inverse p-r-10"
                                                    action="{{ route('admin.layanan.destroy', $item->id_layanan) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a type="submit" role="button" class="text-inverse border-0"
                                                        onclick="document.getElementById('test').submit();" title="Delete"
                                                        data-toggle="tooltip"><i class="ti-trash"></i></a>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
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
    @include('sweetalert::alert')
@endsection
