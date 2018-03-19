$(document).ready(function(){
    var map;
    var id = document.getElementById('getId').dataset.id;
    var coordinates = [];
	

    function initMap() {
		
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 6.4419, lng: 3.1419},
            zoom: 5,
            mapTypeId: 'terrain'
        });
		
        getCoordinates();
    }
	
	function getCoordinates(){
        $.ajax({
            type:'GET',
            url:'/location/'+id,
            success:function(data){
                createTrackingLine(data);
            }
        });
    }

    function createTrackingLine(data){
	
		for (var i = 0; i < data.result.length; i++){
			data.result[i].lat = parseFloat(data.result[i].lat);
			data.result[i].lng = parseFloat(data.result[i].lng);
		}

        var flightPath = new google.maps.Polyline({
            path: data.result,
            geodesic: true,
            strokeColor: 'red',
            strokeOpacity: 1.0,
            strokeWeight: 2
        });

        flightPath.setMap(map);
    }

    

    window.onload = initMap;
})
