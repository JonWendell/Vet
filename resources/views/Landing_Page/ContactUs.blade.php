@extends('back.layout.EcommerceLayout.headerfooter-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Vet')
@section('content')
<!-- map section -->

<body>
<section class="map_section">
    <div id="map" class="h-100 w-100 ">
    </div>

    <div class="form_container ">
      <div class="row">
        <div class="col-md-8 col-sm-10 offset-md-4">
          <form action="">
            <div class="text-center">
              <h3>
                Contact Us
              </h3>
            </div>
            <div>
              <input type="text" placeholder="Name" class="pt-3">
            </div>
            <div>
              <input type=" text" placeholder="Pone Number">
            </div>
            <div>
              <input type="email" placeholder="Email">
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message">
            </div>
            <div class="d-flex justify-content-center">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
  
  <!-- end map section -->
  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
  </body>
@endsection