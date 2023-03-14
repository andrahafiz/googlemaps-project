@extends('layout.main')
@section('container')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">FAQ</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">FAQ</li>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Frequently Asked Questions (FAQ)</h4>
                        <div id="accordion2" role="tablist" class="minimal-faq" aria-multiselectable="true">
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingOne11">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                            href="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11">
                                            Q1. Apa Saja Fitur yang tersedia di website ini?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne11" class="collapse show" role="tabpanel"
                                    aria-labelledby="headingOne11">
                                    <div class="card-body">
                                        Fitur pertama terdapat pada tampilan Pertama menampilkan Maps, dengan menampilkan titik rumah sakit di pekanbaru beserta informasi nya,
                                        Fitur kedua terdapat menampilkan lokasi rumah sakit terdekat dari user berada, keakuratan nya di jamin di karenakan menggunakan metode perhitungan algoritma Haversine.
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingTwo22">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2"
                                            href="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo22">
                                            Q2. Bagaimana cara mengetahui pelayanan rumah sakit secara detail?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo22" class="collapse" role="tabpanel" aria-labelledby="headingTwo22">
                                    <div class="card-body">
                                        Masuk ke menu Pelayanan Rumah Sakit, lalu pilih rumah sakit yang ingin di ketahui pelayanan nya, dan muncul lah di tabel Daftar pelayanan rumah sakit, disitulah terdapat informasi nya.
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingThree33">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2"
                                            href="#collapseThree33" aria-expanded="false" aria-controls="collapseThree33">
                                            Q3. Apakah Ada rute perjalanan ke rumah sakit?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree33" class="collapse" role="tabpanel" aria-labelledby="headingThree33">
                                    <div class="card-body">
                                        Pilih menu Pelayanan Rumah Sakit, lalu pilih rumah sakit yang ingin di kunjungi, dan terdapat button rute, dan pilih lalu akan menampilkan rute dari titik asal ke rumah sakit yang di inginkan.
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingOne111">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                            href="#collapseOne111" aria-expanded="true" aria-controls="collapseOne111">
                                            Q4. Apakah Saya dapat mengetahui informasi nomor ambulance di kota pekanbaru ?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne111" class="collapse" role="tabpanel" aria-labelledby="headingOne111">
                                    <div class="card-body">
                                        Ambulance               : 0761-118
                                        Ambulance Rumah Zakat   : 0761-7097276 / 085376376277
                                        PMI                     : 0761-22224, 23126
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
