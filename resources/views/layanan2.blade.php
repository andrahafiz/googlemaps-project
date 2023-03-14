@extends('layout.main')
@section('container')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Pelayanan Rumah Sakit</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Pelayanan Rumah Sakit </li>
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
                        <h4 class="card-title">Maps Rumah Sakit Terdekat</h4>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-5">
                                    {{-- <form action="/layanan" method="GET"> --}}
                                        <input type="search" class="form-control" name="search"
                                            placeholder="Cari Rumah Sakit...">
                                </div>
                                <div class="col-sm-5">
                                    <button class="btn btn-light btn-block dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Layanan
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach ($layanan as $item)
                                            <a class="dropdown-item" href="javascript:void(0)"><input type="checkbox"
                                                    name="layanan[]" value="{{ $item->id_layanan }}"
                                                    id="filter-{{ $loop->iteration }}">&nbsp;{{ $item->nama_layanan }}</a>
                                        @endforeach
                                        {{-- <a class="dropdown-item" href="#"><input type="checkbox" name="camera_video[]"
                                                value="2">&nbsp;
                                            Checkbox 2</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="camera_video[]"
                                                value="3">&nbsp;
                                            Checkbox 3</a> --}}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-block waves-effect waves-light btn-info"
                                        id="btn-search">Cari</button>
                                </div>
                                {{-- </form> --}}
                            </div>

                            <div class="row d-block mt-3">
                                {{-- @foreach ($data as $item)
                                    <div class="col-md-12 col-lg col-xlg-10  ">
                                        <div class="card card-body bg-light shadow-sm">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 col-lg-3 text-center">
                                                    <a href="app-contact-detail.html"><img
                                                            src="{{ asset('storage/' . $item->foto_rumahsakit) }}"
                                                            alt="user" class="img-thumnail  w-75 h-60"></a>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <h3 class="card-title"><b>{{ $item->nama_rumahsakit }}</b></h3>
                                                    <address class="mb-0">Alamat: {{ $item->alamat_rumahsakit }}</address>
                                                    <address>
                                                        Pelayanan Tersedia: @foreach ($item->layanans as $dt)
                                                            <tr>
                                                                <td> {{ $dt->nama_layanan }}, </td>
                                                            </tr>
                                                        @endforeach
                                                        <br />
                                                        <br />
                                                        <div class="col-sm-6 col-md-4 col-lg-3 f-icon"><i
                                                                class="fas fa-map-pin"></i> 0.5 Km</div>

                                                    </address>
                                                    <a href="{{ route('detaillayanan', $item->id_rumahsakit) }}"
                                                        type="button"
                                                        class="btn waves-effect waves-light btn-primary">Detail Rumah
                                                        Sakit</a>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}
                            </div>
                            <div class="row d-block mt-3">
                                <div id="content-rumahsakit">
                                </div>
                            </div>
                            {{-- {!! $data->links() !!} --}}
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
@section('js')
    <script>
        $(document).ready(function() {
            let rumahsakit = @js($data);
            let text = "";
            let daftarlayanan = "";
            rumahsakit.map((f) => {
                // console.log(f.layanans);
                f.layanans.forEach(function(rowlayanan) {
                    daftarlayanan += `${rowlayanan.nama_layanan}, `;
                })
                text += `<div class="col-md-12 col-lg col-xlg-10  ">
                            <div class="card card-body bg-light shadow-sm">
                                <div class="row align-items-center">
                                    <div class="col-md-4 col-lg-3 text-center">
                                        <a href="app-contact-detail.html"><img
                                                src="{{ asset('storage/') }}/${f.foto_rumahsakit}" alt="user" class="img-thumnail w-75 h-60">
                                                </a>
                                    </div>
                                    <div class="col-md-8 col-lg-9">
                                        <h3 class="card-title"><b>${f.nama_rumahsakit}</b></h3>
                                        <address class="mb-0">Alamat: ${f.alamat_rumahsakit}</address>
                                        <address>
                                            Pelayanan Tersedia: ${daftarlayanan.substring (0, daftarlayanan.length-2)}
                                            <div class="col-sm-6 col-md-4 col-lg-3 f-icon mt-3"><i class="fas fa-map-pin"></i> 0.5 Km</div>
                                        </address>
                                        <a href="/detaillayanan/ ${f.id_rumahsakit}" type="button" class="btn waves-effect waves-light btn-primary">
                                            Detail Rumah Sakit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>`;
            });
            $("#content-rumahsakit").html(text);
        });
        
        $("#btn-search").on("click", function() {
            let length = {{ $layanan->count() }};
            let checked = [];
            for (let i = 1; i < length + 1; i++) {
                let temp = document.getElementById(`filter-${i}`);
                if (temp.checked) {
                    checked.push(parseInt(temp.value))
                }
            }
            let rumahsakit = @js($data);
            // console.log(checked.includes(2))
            // let test = [2,5,4];
            // test.forEach(element => {
            //     // console.log(element)
            //     console.log(checked.includes(element))
            // });
            // console.log(checked)
            // console.log(rumahsakit)
            let listlayanan = new Set();
            rumahsakit.map((f) => {
                console.log("Test"+ f.layanans)
                // f.layanans.forEach(element => {
                //     if (checked.includes(element.id_layanan)) {
                //         listlayanan.add(f);
                //     }
                // });
            });
            console.log(listlayanan);
            // let text = "";
            // let daftarlayanan = "";
            // listlayanan.forEach(function(value) {
            //     // console.log(value.id_rumahsakit)
            //     value.layanans.forEach(function(rowlayanan) {
            //         daftarlayanan += `${rowlayanan.nama_layanan}, `;
            //     })
            //     // value.forEach(element => {
            //     // text += value.id_rumahsakit + "Rumah Sakit " + value.nama_rumahsakit;
            //     text += `<div class="col-md-12 col-lg col-xlg-10  ">
            //                 <div class="card card-body bg-light shadow-sm">
            //                     <div class="row align-items-center">
            //                         <div class="col-md-4 col-lg-3 text-center">
            //                             <a href="app-contact-detail.html"><img
            //                                     src="{{ asset('storage/') }}/${value.foto_rumahsakit}" alt="user" class="img-thumnail w-75 h-60">
            //                                     </a>
            //                         </div>
            //                         <div class="col-md-8 col-lg-9">
            //                             <h3 class="card-title"><b>${value.nama_rumahsakit}</b></h3>
            //                             <address class="mb-0">Alamat: ${value.alamat_rumahsakit}</address>
            //                             <address>
            //                                 Pelayanan Tersedia: ${daftarlayanan.substring (0, daftarlayanan.length-2)}
            //                                 <div class="col-sm-6 col-md-4 col-lg-3 f-icon mt-3"><i class="fas fa-map-pin"></i> 0.5 Km</div>
            //                             </address>
            //                             <a href="/detaillayanan/ ${value.id_rumahsakit}" type="button" class="btn waves-effect waves-light btn-primary">
            //                                 Detail Rumah Sakit
            //                             </a>
            //                         </div>
            //                     </div>
            //                 </div>
            //             </div>`;
            // })
            // $("#content-rumahsakit").html(text);
        })
    </script>
@endsection
