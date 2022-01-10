@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
         
            <div id="map"></div>
           

            </div>
        </div>
</div>
<div class="container">
    <div class="row justify-content-center">
     
        <div class=" col-md-3">
          <div class="card card-info px-2 w-100 mt-3" style="height:15vh;">
            <div class="card-body text-center">
              <div class="card-title"> 12 </div>
            </div>
            <div class="card-header text-center">
              {{ __('content.BestGovOrders') }}
            </div>
          </div>
          <div class="card px-2 w-100 mt-3" style="height:15vh;">
            <div class="card-body text-center">
              <div class="card-title"> 12 </div>
            </div>
            <div class="card-header text-center">
              {{ __('content.BestZonesOrders') }}
            </div>
          </div>
        </div>
    
   
  
      <div class="col-md-9 ">
        <table class="table">
          <thead>
            <th>--</th>

            <th> {{__('content.Gov')}}</th>
          </thead>
          <tbody>
            @foreach($governoments as $index => $gov)
            <tr>
              <td> {{ $index +1 }} </td>
              <td> {{ $gov->name }} </td>
<tr>
            @endforeach
          </tbody>
        </table>
      </div>
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
    const map = new google.maps.Map(document.getElementById("map"), {
      center: cairo,
      zoom: 8,
      restriction: {
      latLngBounds: Egypt,
      strictBounds: true,
    },
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }
</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASXMoZXfOqjIv19lBd1jmPgVz6Akg7ib0&callback=initMap&libraries=&v=weekly&region=EG&language=ar"
 async></script>



@endsection
