@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-6">
        <div id="govmap">
            
        </div>
           

    </div>
    </div>
</div>
<script>
    function initGovMap() {
        const cairo = { lat: 30.064742, lng: 31.249509 };
        const Egypt = {
            north: 32.1 ,
            south: 21.3,
            west: 24.2,
            east:  37.3,
        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("govmap"), {
        center: cairo,
        zoom: 8,
        restriction: {
        latLngBounds: Egypt,
        strictBounds: true,
        },
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
        position: cairo,
        map: map,
        });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUK1eXvQxbsDDX9WU57uL3OmzuSR0oIMk&callback=initGovMap&libraries=&v=weekly&region=EG&language=ar"
 async></script>
@endsection