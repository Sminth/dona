@extends('layouts.app')

@section('content')
<link href="https://api.mapbox.com/mapbox-gl-js/v3.0.1/mapbox-gl.css" rel="stylesheet">
<link href="{{asset('assets/css/map.css')}}" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v3.0.1/mapbox-gl.js"></script>
<style>

</style>

<div style="position: relative;height:80vh">
    <div id="map"></div>
    <div id="sidebar" class="shadow-lg"></div>

    <div id="legend">


        <div id="vote">
            <canvas id="votesChart"></canvas>
        </div>

        <div id="participation-rate" class="participation">
            <canvas id="participationChart"></canvas>
        </div>

        {{-- <div class="legend">
            <p class="text-center" style="color: red">LEGENDE</p>
            <div class="legend-item" data-type="meeting">
                <img src="assets/images/coeur.png" class="legend-icon" alt="meeting" />
                <span>Appel de dons</span>
            </div>

            <span class="text-center" style="color: red; font-size:11px">** cliquez sur un élément de la legende pour filtrer les événements sur la carte</span>

        </div> --}}
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('assets/js/map.js')}}"></script>


@endsection
