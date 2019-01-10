var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('google_map'), {
        center: { lat: 6.435480, lng: 3.428470 },
        zoom: 8
    });
}