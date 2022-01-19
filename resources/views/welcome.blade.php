@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row ">
        <div class="col-md-6">
         
            <div id="map"></div>
            <div id="googlemap"></div>

            </div>
           

        <div class=" col-md-6">
       
          <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0"
          width="100%">
            <thead>
              <tr>
              <th>#</th>
  
              <th> {{__('content.Gov')}}</th>
              </tr>
            </thead>
        
            <tbody>
              @foreach($governoments as $index => $gov)
              <tr>
              
                <td> {{ $index +1 }} </td>
                <td>   <a href="{{route('gov')}}">{{ $gov->name }}   </a></td>
            
              </tr>
              @endforeach
            </tbody>
          </table>

          <div class="row mt-2">
            <div class=" col-md-6 card card-info " style="height:15vh;">
              <div class="card-body text-center">
                <div class="card-title"> 12 </div>
              </div>
              <div class="card-header text-center">
                {{ __('content.BestGovOrders') }}
              </div>
            </div>
            <div class="col-md-6 card " style="height:15vh">
              <div class="card-body text-center">
                <div class="card-title"> 12 </div>
              </div>
              <div class="card-header text-center">
                {{ __('content.BestZonesOrders') }}
              </div>
            </div>
          </div>
        </div>
    
   
  
      {{-- <div class="col-md-9 ">

  
      </div> --}}
  </div>
  
</div>


 <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
 
 <script>
  // Initialize and add the map
  function initMap() {
    // The location of Uluru
    const cairo = { lat: 30.064742, lng: 31.249509 };
    const Egypt = {
        north: 32.1 ,
        south: 21.3,
        west: 24.2,
        east:  37.3,
      };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("googlemap"), {
      center: cairo,
      zoom: 8,
    //   restriction: {
    //   latLngBounds: Egypt,
    //   strictBounds: true,
    // },
    });
  //   map.data.loadGeoJson(
  //   "{{asset('boundary-polygon-land-lvl8.geojson')}}"
  // );
  // Set the stroke width, and fill color for each polygon

// Define the LatLng coordinates for the polygon's path.
const triangleCoords = [
    { lat: 25.774, lng: -80.19 },
    { lat: 18.466, lng: -66.118 },
    { lat: 32.321, lng: -64.757 },
    { lat: 25.774, lng: -80.19 },
  ];
  // Construct the polygon.
  const bermudaTriangle = new google.maps.Polygon({
    paths: triangleCoords,
    strokeColor: "#FF0000",
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: "#FF0000",
    fillOpacity: 0.35,
  });

  bermudaTriangle.setMap(map);
  map.data.setStyle({
    fillColor: "green",
    strokeWeight: 10,
  });   // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: cairo,
      map: map,
    });

    map.addListener("click", (mapsMouseEvent) => {
        // Close the current InfoWindow.
        console.log('fdfdf');
        // Create a new InfoWindow.
        infoWindow = new google.maps.InfoWindow({
          position: mapsMouseEvent.latLng,
        });
        infoWindow.setContent(
          JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
        );
        // infoWindow.open(map);
        const newcenter = mapsMouseEvent.latLng.toJSON();
        const map = new google.maps.Map(document.getElementById("googlemap"), {
      center: newcenter,
      zoom: 15,
      restriction: {
      latLngBounds: Egypt,
      strictBounds: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    },
    });
        console.log(mapsMouseEvent.latLng.toJSON());


      });
  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASXMoZXfOqjIv19lBd1jmPgVz6Akg7ib0&callback=initMap&libraries=&v=weekly&region=EG&language=ar"
 async></script>

 <script type="text/javascript" src="{{asset('js/mapdata.js')}}"></script>
 <script  type="text/javascript" src="{{asset('js/countrymap.js')}}"></script>
@endsection
