@extends('layout_admin.main')
@section('container')
    {{-- <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Map</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Map</li>
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
                        <h4 class="card-title">Map Rumah Sakit Terdekat</h4>
                        <div id="googleMap" style="width:100%;height:380px;"></div>
                        <div id="gmaps-simple" class="gmaps"></div>
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
    </div> --}}
    {{-- <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap"></script> --}}
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">

                <h4 class="text-themecolor">Map</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item active">Map</li>

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
                        <h4 class="card-title">Map Rumah Sakit Terdekat</h4>
                        <div class="hero-container w-100" style="height: 600px" id="maps"></div>
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


@php

@endphp


@section('js')
    <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLEMAP_API_KEY', '') }}&callback=initMap">
    </script>
    <script>
        let layananKesehatanShow = @js($layananRumahSakit);
        // console.log(layananKesehatanShow);
        let map, infoWindow;
        let directionsService;
        let directionsRenderer;

        const nowLocation = {
            lat: 0,
            lng: 0
        }

        function initMap() {
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();

            map = new google.maps.Map(document.getElementById("maps"), {
                center: {
                    lat: 0.50791,
                    lng: 101.44539
                },
                zoom: 12,
            });
            directionsRenderer.setOptions({
                polylineOptions: {
                    strokeColor: '#363636'
                }
            });
            directionsRenderer.setMap(map);
            const options = {
                enableHighAccuracy: true,
                timeout: 5000,
                maximumAge: 0
            };

            const locationButton = document.createElement("button");

            locationButton.textContent = "Rute Rumah Sakit Terdekat";
            locationButton.classList.add("mt-3");
            locationButton.classList.add("btn");
            locationButton.classList.add("btn-info");
            locationButton.classList.add("waves-effect");
            locationButton.classList.add("waves-light");
            locationButton.setAttribute("id", "route");
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);

            const image = {
                url: '/assets/images/clients/people.png',
                scaledSize: new google.maps.Size(40, 40)
            };

            const markers = new google.maps.Marker({
                position: nowLocation,
                title: `Lokasi anda Sekarang`,
                icon: image,
                draggable: false,
                map: map
            });

            markers.addListener('position_changed', () => {
                nowLocation.lat = markers.position.lat();
                nowLocation.lng = markers.position.lng();
            });

            infoWindow = new google.maps.InfoWindow();

            let pos;
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };

                        // infoWindow.setPosition(pos);
                        // infoWindow.setContent("Location found.");
                        // infoWindow.open(map);
                        markers.setPosition(pos)
                        map.setCenter(pos);
                        // let test_data = {
                        //     lat: 0.50791,
                        //     lng: 101.44539
                        // }
                        // let test = haversine(test_data, pos)
                        // console.log(test);
                        const set_radius = new google.maps.Circle({
                            strokeColor: "#f38038",
                            strokeOpacity: 0.4,
                            strokeWeight: 2,
                            fillColor: "#f38038",
                            fillOpacity: 0.25,
                            map: map,
                            center: pos,
                            radius: 5 * 1000, // 20km
                        });
                    },
                    () => {
                        handleLocationError(true, infoWindow, map.getCenter());
                    }, options
                );
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
            locationButton.addEventListener('click', (e) => {
                let min = 0;
                const nearestLocation = {
                    lat: 0,
                    lng: 0
                };
                layananKesehatanShow.forEach((v, i) => {
                    const posLayananKesehatan = {
                        lat: v.latitude_rumahsakit,
                        lng: v.longitude_rumahsakit
                    };

                    const jarak = haversine(posLayananKesehatan, nowLocation);
                    if (i === 0) {
                        min = jarak;
                        nearestLocation.lat = v.latitude_rumahsakit;
                        nearestLocation.lng = v.longitude_rumahsakit;
                    }

                    if (jarak < min) {
                        min = jarak;
                        nearestLocation.lat = v.latitude_rumahsakit;
                        nearestLocation.lng = v.longitude_rumahsakit;
                    }
                });
                console.log(nearestLocation);
                console.log(nowLocation);

                calculateAndDisplayRoute(nowLocation, nearestLocation);
            });

            updateList(layananKesehatanShow);
            // });
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(
                browserHasGeolocation ?
                "Error: The Geolocation service failed." :
                "Error: Your browser doesn't support geolocation."
            );
            infoWindow.open(map);
            // const mandailing = {
            //     lat: 0.50791,
            //     lng: 101.44539
            // };

            // directionsService = new google.maps.DirectionsService();
            // directionsRenderer = new google.maps.DirectionsRenderer();

            // map = new google.maps.Map(document.getElementById("maps"), {
            //     zoom: 12,
            //     center: mandailing,
            //     mapTypeControl: false,
            //     fullscreenControl: false
            // });



            // const options = {
            //     enableHighAccuracy: true,
            //     timeout: 5000,
            //     maximumAge: 0
            // };

            // const image = {
            //     url: '/assets/images/clients/people.png',
            //     scaledSize: new google.maps.Size(40, 40)
            // };

            // const markers = new google.maps.Marker({
            //     position: nowLocation,
            //     title: `Lokasi anda Sekarang`,
            //     icon: image,
            //     draggable: false,
            //     map: map
            // });

            // // markers.addListener('position_changed', () => {
            // //     nowLocation.lat = markers.position.lat();
            // //     nowLocation.lng = markers.position.lng();
            // // });

            // // map.addListener("click", (e) => {
            // //     // console.log(e)
            // //     const liveCoord = {
            // //         lat: e.latLng.lat(),
            // //         lng: e.latLng.lng()
            // //     }

            // //     markers.setPosition(liveCoord);
            // // });

            // //GET CURRENT LOCATION

            // // if (navigator.geolocation) {
            // //     navigator.geolocation.getCurrentPosition(
            // //         (position) => {
            // //             const liveCoord = {
            // //                 lat: position.coords.latitude,
            // //                 lng: position.coords.longitude
            // //             }

            // //             markers.setPosition(liveCoord);
            // //             console.log(liveCoord);
            // //         }, (err) => {
            // //             console.warn(`ERROR(${err.code}): ${err.message}`);
            // //         }, options);
            // // }
            // // lat: 0.5612554174443073, //0.561628
            // // lng: 101.41941833466386 //101.420196
            // const lokasirumah = {
            //     lat: 0.561628,
            //     lng: 101.420196
            // };
            // const posLayananKesehatan = {
            //     lat: 0.5602146914431577,
            //     lng: 101.43776568939465
            // };

            // layananKesehatanShow.forEach((v, i) => {
            //     const posLayananKesehatan = {
            //         lat: v.latitude_rumahsakit,
            //         lng: v.longitude_rumahsakit
            //     };
            //     console.log("Lokasi Sekarang")
            //     console.log(lokasirumah)
            //     const jarak = haversine(posLayananKesehatan, lokasirumah);
            //     // if (i === 0) {
            //     //     min = jarak;
            //     //     nearestLocation.lat = v.latitude_rumahsakit;
            //     //     nearestLocation.lng = v.longitude_rumahsakit;
            //     // }

            //     // if (jarak < min) {
            //     //     min = jarak;
            //     //     nearestLocation.lat = v.latitude_rumahsakit;
            //     //     nearestLocation.lng = v.longitude_rumahsakit;
            //     // }
            //     console.log(jarak + "KM")
            // });
            // // const jarak = haversine(posLayananKesehatan, lokasirumah);
            // // console.log(jarak + "KM")





            // document.getElementById('route').addEventListener('click', (e) => {
            //     let min = 0;
            //     const nearestLocation = {
            //         lat: 0,
            //         lng: 0
            //     };

            //     layananKesehatanShow.forEach((v, i) => {
            //         const posLayananKesehatan = {
            //             lat: v.latitude_rumahsakit,
            //             lng: v.longitude_rumahsakit
            //         };

            //         const jarak = haversine(posLayananKesehatan, nowLocation);
            //         if (i === 0) {
            //             min = jarak;
            //             nearestLocation.lat = v.latitude_rumahsakit;
            //             nearestLocation.lng = v.longitude_rumahsakit;
            //         }

            //         if (jarak < min) {
            //             min = jarak;
            //             nearestLocation.lat = v.latitude_rumahsakit;
            //             nearestLocation.lng = v.longitude_rumahsakit;
            //         }
            //     });

            //     calculateAndDisplayRoute(nowLocation, nearestLocation);
            // });

            // updateList(layananKesehatanShow);
        }
        window.initMap = initMap;

        function calculateAndDisplayRoute(start, destination) {
            directionsService
                .route({
                    origin: start,
                    destination: destination,
                    travelMode: google.maps.TravelMode.DRIVING,
                })
                .then((response) => {
                    directionsRenderer.setDirections(response);
                })
                .catch((e) => window.alert("Directions request failed due to " + status));
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

        function updateList(layanan) {
            let layananKesehatans = layanan;
            layananKesehatans.forEach(e => {
                let Layanans = '';

                e.layanans.forEach(el => {
                    Layanans +=
                        `<li class="text-start">${el.nama_layanan}</li>`;
                });

                const positions = {
                    lat: e.latitude_rumahsakit,
                    lng: e.longitude_rumahsakit
                };

                const contentString =
                    `<div class="w-auto h-auto container">
                      <h3 class="text-dark mb-3"><b>${e.nama_rumahsakit.toUpperCase()}</b></h3>
                      <div class="row">
                        <div class="col-6">
                          <img src="{{ asset('storage') }}/${e.foto_rumahsakit}" class="img-thumbnail" style="max-width:100% !important">  
                        </div>
                        <div class="col-6">
                            <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><b>Alamat</b></td>
                                    <td>:</td>
                                    <td> ${e.alamat_rumahsakit}</td>
                                </tr>
                                <tr>
                                    <td><b>Daftar Pelayanan</b></td>
                                    <td>:</td>
                                    <td>
                                        <ul class="pl-0">${Layanans}</ul>
                                    </td>
                                </tr>
                            </table>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                        <button  id="button-route" type="button" class="btn btn-primary btn-lg btn-block">
                            <img src="/assets/images/clients/bg.png" class="img-thumbnail" style="width: 30px; height: 30px;background-color: transparent;border:0;object-fit: cover"> Rute
                            </button>
                    </div>`;
                // console.log(contentString)
                let infowindow = new google.maps.InfoWindow({
                    content: contentString,
                });

                let url = '/assets/images/clients/rs.png';

                const image = {
                    url: url,
                    scaledSize: new google.maps.Size(40, 40)
                };

                const marker = new google.maps.Marker({
                    position: positions,
                    title: `${e.nama_rumahsakit} ${e.alamat_rumahsakit}`,
                    icon: image,
                    map: map
                });

                marker.addListener("click", () => {
                    infowindow.open({
                        anchor: marker,
                        map,
                        shouldFocus: false,
                    });
                });

                map.addListener("click", () => {
                    infowindow.close();
                });

                google.maps.event.addListener(infowindow, 'domready', function() {
                    document.getElementById("button-route").addEventListener("click", () => {
                        calculateAndDisplayRoute(nowLocation, positions, directionsService,
                            directionsRenderer);
                        infowindow.close();
                    });
                });
            });
        }

        window.initMap = initMap;
    </script>
@endsection
