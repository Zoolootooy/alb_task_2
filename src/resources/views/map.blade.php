<div class="map mb-5" >
    <style>
        .map{
            /*text-align: center;*/
            height: 450px;
        }
    </style>

    <div id="map" class="map"></div>
</div>

<script src="{{ asset('js/map.js') }}"></script>
<?php $map_src = "https://maps.googleapis.com/maps/api/js?key=".$map_api."&callback=initMap"?>
<script src="{{$map_src}}" async defer></script>
