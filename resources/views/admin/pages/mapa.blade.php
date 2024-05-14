@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">{{ __('Registros') }}</div>
                <div class="card-body">
                   
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ubicaciones') }}</div>
                <div class="card-body">
                   <div id="map" style="hewidth: 100%; height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var map = L.map('map').setView([10.986896, -74.804140], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([10.986896, -74.804140]).addTo(map)
        .bindPopup('Barranquilla is Crazy.')
        .openPopup();   
</script>

@endsection
