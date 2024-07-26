function initMap(){
    var coord = {lat:18.8806669 , lng:-97.7303767};
    var map = new google.maps.Map(document.getElementById('map'), {
    center: coord,
    zoom: 15
    });}