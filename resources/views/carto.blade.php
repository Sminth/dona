@extends('layouts.app')

@section('extra-css')
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/map.css')}}">

    <style>
        footer {
            display: none;
        }
        @media (max-width:992px) {
            #legend {
            display: none;
        }
}
    </style>
@endsection
@section('content')
    <div id="map"></div>
    <div id="sidebar" class="shadow-lg"></div>

    <div id="legend">


        <div id="vote">
            <canvas id="votesChart"></canvas>
        </div>

        <div id="participation-rate" class="participation">
            <canvas id="participationChart"></canvas>
        </div>

        <div class="legend">
            <p class="text-center" style="color: red">LEGENDE</p>
            <div class="legend-item" data-type="meeting">
                <img src="map/handshake.png" class="legend-icon" alt="meeting" />
                <span>Meeting</span>
            </div>
            <div class="legend-item" data-type="debat">
                <img src="map/flip-chart.png" class="legend-icon" alt="debat" />
                <span>Débat/Rassemblement</span>
            </div>
            {{-- <span class="text-center" style="color: red; font-size:11px">** cliquez sur un élément de la legende pour filtrer les événements sur la carte</span> --}}

        </div>
    </div>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="assets/js/map.js"></script>
@endsection

@section('extra-js')
@endsection
