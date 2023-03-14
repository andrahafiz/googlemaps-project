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

                            {{-- <div class="row d-block mt-3">
                               @foreach ($data as $item)
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
                                @endforeach 
                            </div> --}}
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
        <button onclick="getLocation()">Try It</button>
        <p id="demo"></p>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
@endsection
@section('js')
    {{-- <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLEMAP_API_KEY', '') }}&callback=initMap">
    </script> --}}
    <script>
        let layananKesehatanShow = @js($data);
        var x = document.getElementById("demo");

        var test;
        var nowLocation = {
            lat: 0,
            lng: 0
        }

        function success(pos) {
            const crd = pos.coords;
            nowLocation.lat = crd.latitude;
            nowLocation.lng = crd.longitude;
            // console.log('Your current position is:');
            // console.log(`Latitude : ${crd.latitude}`);
            // console.log(`Longitude: ${crd.longitude}`);
            // console.log(`More or less ${crd.accuracy} meters.`);
            layananKesehatanShow.forEach((v, i) => {
                const posLayananKesehatan = {
                    lat: v.latitude_rumahsakit,
                    lng: v.longitude_rumahsakit
                };
                const jarak = haversine(posLayananKesehatan, nowLocation);
                v.disc = parseFloat(jarak.toFixed(2));
                // console.log("pos", posLayananKesehatan)
                // console.log("lokasi sekarang", nowLocation)
                // console.log("haversei ", jarak)
            });
            updatelist(layananKesehatanShow);
        }

        function error(err) {
            console.warn(`ERROR(${err.code}): ${err.message}`);
        }

        navigator.geolocation.getCurrentPosition(success, error);

        function updatelist(list) {
            console.log(list)
            let sorting;
            list.sort((a, b) => {
                return a.disc - b.disc;
              
            })
            list.forEach(value => {
                let daftarlayanan = "";
                value.layanans.forEach(function(rowlayanan) {
                    daftarlayanan += `${rowlayanan.nama_layanan}, `;
                })
                text = `<div class="col-md-12 col-lg col-xlg-10  ">
                        <div class="card card-body bg-light shadow-sm">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="app-contact-detail.html"><img
                                            src="{{ asset('storage/') }}/${value.foto_rumahsakit}" alt="user" class="img-thumnail w-75 h-60">
                                            </a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="card-title"><b>${value.nama_rumahsakit}</b></h3>
                                    <address class="mb-0">Alamat: ${value.alamat_rumahsakit}</address>
                                    <address>
                                        Pelayanan Tersedia: ${daftarlayanan.substring (0, daftarlayanan.length-2)}
                                        <div class="col-sm-6 col-md-4 col-lg-3 f-icon mt-3"><i class="fas fa-map-pin"></i> ${value.disc} Km</div>
                                    </address>
                                    <a href="/detaillayanan/ ${value.id_rumahsakit}" type="button" class="btn waves-effect waves-light btn-primary">
                                        Detail Rumah Sakit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>`;
                $("#content-rumahsakit").append(text);
            });
        }

        function haversine(coords1, coords2, isMiles) {
            function toRad(x) {
                return x * Math.PI / 180;
            }

            let lon1 = coords1.lng;
            let lat1 = coords1.lat;

            let lon2 = coords2.lng;
            let lat2 = coords2.lat;

            let R = 6371; // km

            let x1 = lat2 - lat1;
            let dLat = toRad(x1);
            let x2 = lon2 - lon1;
            let dLon = toRad(x2)
            let a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);
            let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            let d = R * c;

            if (isMiles) d /= 1.60934;

            return d;
        }

        function showPosition(position) {
            test = position.coords.latitude;
            x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
        }

        function getUserAddressBy(lat, long) {
            setAddressToInputField(lat)
        }

        function setAddressToInputField(lat) {
            test = lat
        }
        // setInterval(function() {
        //     console.log(test)
        // }, 1000);
        // alert("Value of 'a' outside the function " + test);

        function getCoord() {
            let coordlat = lat,
                coordlng = lng;

            return {
                coordlat,
                coordlng
            };
        }
        // $(document).ready(function() {
        //     let rumahsakit = layananKesehatanShow;
        //     let text = "";
        //     console.log("rumah",rumahsakit);
        //     rumahsakit.forEach(value => {
        //         let daftarlayanan = "";
        //         console.log(value)
        //         value.layanans.forEach(function(rowlayanan) {
        //             daftarlayanan += `${rowlayanan.nama_layanan}, `;
        //         })
        //         text = `<div class="col-md-12 col-lg col-xlg-10  ">
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
    //                                 <div class="col-sm-6 col-md-4 col-lg-3 f-icon mt-3"><i class="fas fa-map-pin"></i> ${value.disc} Km</div>
    //                             </address>
    //                             <a href="/detaillayanan/ ${value.id_rumahsakit}" type="button" class="btn waves-effect waves-light btn-primary">
    //                                 Detail Rumah Sakit
    //                             </a>
    //                             <h6>jarak :</h6>
    //                         </div>
    //                     </div>
    //                 </div>
    //             </div>`;
        //         $("#content-rumahsakit").append(text);
        //     });
        //     // console.log(sortRumahSakit);
        //     // sortRumahSakit.forEach(value => {
        //     //     let text = ''
        //     //     text += value.foto_rumahsakit;
        //     //     $("#content-rumahsakit").append(text + "<br/>");
        //     // });

        //     function haversine(coords1, coords2, isMiles) {
        //         function toRad(x) {
        //             return x * Math.PI / 180;
        //         }

        //         let lon1 = coords1.lng;
        //         let lat1 = coords1.lat;

        //         let lon2 = coords2.lng;
        //         let lat2 = coords2.lat;

        //         let R = 6371; // km

        //         let x1 = lat2 - lat1;
        //         let dLat = toRad(x1);
        //         let x2 = lon2 - lon1;
        //         let dLon = toRad(x2)
        //         let a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        //             Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) *
        //             Math.sin(dLon / 2) * Math.sin(dLon / 2);
        //         let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        //         let d = R * c;

        //         if (isMiles) d /= 1.60934;

        //         return d;
        //     }
        // });

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
            console.log(rumahsakit)
            let listlayanan = new Set();
            rumahsakit.map((f) => {
                f.layanans.forEach(element => {
                    if (checked.includes(element.id_layanan)) {
                        listlayanan.add(f);
                    }
                });
            });
            console.log(listlayanan);
            let text = "";
            listlayanan.forEach(function(value) {
                let daftarlayanan = "";
                // console.log(value.id_rumahsakit)
                value.layanans.forEach(function(rowlayanan) {
                    daftarlayanan += `${rowlayanan.nama_layanan}, `;
                })
                // value.forEach(element => {
                // text += value.id_rumahsakit + "Rumah Sakit " + value.nama_rumahsakit;
                text += `<div class="col-md-12 col-lg col-xlg-10  ">
                            <div class="card card-body bg-light shadow-sm">
                                <div class="row align-items-center">
                                    <div class="col-md-4 col-lg-3 text-center">
                                        <a href="app-contact-detail.html"><img
                                                src="{{ asset('storage/') }}/${value.foto_rumahsakit}" alt="user" class="img-thumnail w-75 h-60">
                                                </a>
                                    </div>
                                    <div class="col-md-8 col-lg-9">
                                        <h3 class="card-title"><b>${value.nama_rumahsakit}</b></h3>
                                        <address class="mb-0">Alamat: ${value.alamat_rumahsakit}</address>
                                        <address>
                                            Pelayanan Tersedia: ${daftarlayanan.substring (0, daftarlayanan.length-2)}
                                            <div class="col-sm-6 col-md-4 col-lg-3 f-icon mt-3"><i class="fas fa-map-pin"></i> 0.5 Km</div>
                                        </address>
                                        <a href="/detaillayanan/ ${value.id_rumahsakit}" type="button" class="btn waves-effect waves-light btn-primary">
                                            Detail Rumah Sakit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>`;
            })
            $("#content-rumahsakit").html(text);
        })
    </script>
@endsection
