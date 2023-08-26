<script>
    function initMap() {
        new google.maps.Map(document.getElementById("map"), {
            zoom: 8,
            center: {lat: 46.716667, lng: 24.633333},
        });
    }
    window.initMap = initMap;
</script>

<script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJbInYcGEiphIv_Xne3uOhTasP181ZwJo&region=KSA&language=ar&callback=initMap">
</script>
