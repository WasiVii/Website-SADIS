@extends('layouts/app')
 
@section('title', 'Peta Sekolah')

@section('content')
    <section class="flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        SADIS School Maps
                    </p>
                    </div>
                </div>
            </section>
            <section class="mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg h-96">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="card-body">
                            <p class="normal-case text-4xl font-bold">Maps</p>
                            <p>Berikut adalah peta dari SADIS School kami, dimana sekolah kami terletak di Jl. Budi Utomo No.7, Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710, Indonesia</p>
                            <div class="card-actions justify-end">
                            </div>
                        </div>
                        <div id="map"></div>
                </div>
            </section>
        </div>
    </section>
@endsection



@push('scripts')
<script>
        let map, markers = [];
        
        function initMap() {
            map = L.map('map', {
                center: {
                    lat: 28.626137,
                    lng: 79.821603,
                },
                zoom: 15
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap'
            }).addTo(map);

            map.on('click', mapClicked);
            initMarkers();
        }
        initMap();

        function initMarkers() {
            const initialMarkers = <?php echo json_encode($initialMarkers); ?>;

            for (let index = 0; index < initialMarkers.length; index++) {

                const data = initialMarkers[index];
                const marker = generateMarker(data, index);
                marker.addTo(map).bindPopup(`<b>${data.position.lat},  ${data.position.lng}</b>`);
                map.panTo(data.position);
                markers.push(marker)
            }
        }

        function generateMarker(data, index) {
            return L.marker(data.position, {
                    draggable: data.draggable
                })
                .on('click', (event) => markerClicked(event, index))
                .on('dragend', (event) => markerDragEnd(event, index));
        }

        function mapClicked($event) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
        }

        function markerClicked($event, index) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
        }

        function markerDragEnd($event, index) {
            console.log(map);
            console.log($event.target.getLatLng());
        }

    </script>
@endpush