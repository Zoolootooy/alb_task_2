<div class="map mb-5" >

    <div id="map" class="map"></div>
</div>

<script src="<?php echo e(asset('js/map.js')); ?>"></script>
<?php $map_src = "https://maps.googleapis.com/maps/api/js?key=".$map_api."&callback=initMap"?>
<script src="<?php echo e($map_src); ?>" async defer></script>
<?php /**PATH /home/developer/PhpstormProjects/AlbTask2/src/resources/views/map.blade.php ENDPATH**/ ?>