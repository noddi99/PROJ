<?php require 'login/php/check_session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eNno Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> 
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <style type="text/css">
    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
/*gif loader*/
 #loading{
      position: fixed;
      display: block;
      justify-content: center;
      width: 100%;
      height: 100%;
      top: 0px;
      left: 0px;
      text-align: center;
      opacity: 0.7;
      background-color: #fff;
      z-index: 9999;
    }
    #loader-image{
      position: absolute;
      justify-content: center;
      left: calc(50% - 50px);
      top: 50%;
      z-index: 9999999;
    }
  </style>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">smartDelivery</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
          <li><a class="nav-link scrollto" href="#account">ACCOUNT</a></li>
            <?php if (isset($_SESSION['farmer_email'])): ?>
               <li><a class="nav-link scrollto" href="#tracks">ALL TRACKS/LOCATION</a></li>
              <li class="dropdown"><a href="#"><span>NOTIFICATIONS [<span id="counter">0</span>]</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a id="dropdownCounter" href="#"></a></li>
                  
  
            </ul>
          </li>
            <?php endif ?>
          <?php if (isset($_SESSION['driver_email'])): ?>
          <li><a class="nav-link scrollto " href="#portfolio">OPERATIONS</a></li>
          <li><a class="nav-link scrollto" href="#contact">CHECK ROUTE</a></li>
           <?php endif ?>
          <li><a class="getstarted scrollto" href="login">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Elegant and smart deliveries</h1>
          <h2>We collect farm products at all points with our Trucks equiped with gps</h2>
          <div class="d-flex">
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img style="border-radius: 10px;" src="assets/img/tractor.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero --><br><br><br><br><br><br>

  <main id="main">
    <?php if (isset($_SESSION['farmer_email'])): ?>
      
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" id="tracks">
        <div class="section-title">
          <span>All Tracks/Location</span>
          <h2>All Tracks/Location</h2>
          </div>

        <div class="row">
          
           <?php include 'login/php/display_proximity.php'; ?>
      </div>

    </section><br><br><br><br><br><br><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
   
     <?php endif ?>
      <div id="myModal" class="modal">

               <!-- Modal content -->
               <div class="modal-content">
                 <span class="close">&times;</span>
                 <div id="modelContent">
                  
                   
                   <section id="about" class="about">
                    <div class="container">
                    <div class="row">
                      <h2 class="title" id="geofence"></h2>
                      <div style="width: 100%; height: 400px;" class="col-lg-6" id="map2"></div>
                    </div>
                    </section>
                   
                 </div>
              </div>
            </div>
   <!-- End About Section -->
      <!-- ======= accounts Section ======= -->
    <section style="margin-left: 30px; margin-right: 30px;" id="account" class="contact ">
      <div class="container shadow">

        <div class="section-title">
          <span>Account</span>
          <h2>Account</h2>
          <center>
            <div class="row">
              
              
                 <?php include 'login/php/display_user_info.php' ?>
                 

                <br><br>
             
            </div>
          </center>
          
        </div>
      </div>
    </section>
      <!-- ======= end of account Section ======= -->

       <!-- ======= accounts Section ======= -->
   <!-- <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>Notifications</span>
          <h2>Notifications</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Tractor DFHKSLASS</a></h4>
              <p>Malvine Owuor passed with this track at 12:00pm</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

         

        </div>

      </div>
    </section> --><!-- End Services Section -->
      <!-- ======= end of account Section ======= -->
    <?php if (isset($_SESSION['driver_email'])): ?>
      
    <!-- ======= Portfolio Section ======= -->
    <section style="margin-left: 30px; margin-right: 30px;" id="portfolio" class="portfolio ">
      <div class="container shadow">

        <div class="section-title">
          <span>Farmers & Locations</span>
          <h2>Farmers & Locations</h2>
          <p>Update your location, add Delivery points</p>
          <table class="table table-bordered">
            <tr>
              <th>#</th>
              <th>Farmer Name</th>
              <th>PickUp</th>
              <th>Map</th>
            </tr>
            <?php include 'login/php/display_farmers.php'; ?>
          </table>
        </div>

    
        <div class="row portfolio-container">


          

        </div>

      </div>
    </section>
     <!-- ======= Contact Section ======= -->



    <!-- ======= Contact Section ======= -->
    <section style="margin-left: 30px; margin-right: 30px;" id="contact" class="contact ">
      <div class="container shadow info">
        <div class="row">
          <div class="section-title col-md-5">
          <span>Get/Show Route</span>
          <h2>Get/Show Route</h2>
          <center>
            <form class="form-group container">
            <div class="row">
              <h3 id="totalDistance"></h3>
               <div class="col-md-1 "></div>
              <div class="col-md-12">
                  <input id="origin" class="form-control" type="text" value="" placeholder="starting point">
              </div><br><br>
              <div class="col-md-12">
                  <input id="destination" class="form-control" type="text" value="" placeholder="Ending point">
              </div><br><br>
              <div class="col-md-12">
                  <button id="directions_btn" class="btn btn-primary" type="button" value="" placeholder="">Get Directions</button>
              </div>
            </div>
           </form>
          </center>
          
        </div>

          <div class="col-lg-7 d-flex align-items-stretch">
            
            <div style="height: 500px; width: 100%;" id="map">
              
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

       <?php endif ?>
    

  </main><!-- End #main -->

  <div id="myModal2" class="modal">

               <!-- Modal content -->
               <div class="modal-content">
                 <span id="close" class="close">&times;</span>
                 <div id="modelContent2"> 
                   <section id="about" class="about">
                    <div class="container">
                    <div class="row">
                      <center><h2 class="bi bi-truck text-danger"></h2> </center>
                      <p class="text-center" id="edit_message"></p>
                    </div>
                    </section>
                   
                 </div>
              </div>
            </div>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="social-links">
          <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>smartDelivery</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="js/jquery.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOqdYxKE5-2VvOJpTXZL3UGWr7WKA4mdM&callback=initMap"
    type="text/javascript"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
    //push notifications
    function returnFarmerLocation(){
      var callback = ""
       $.ajax({
                url: "login/php/return_user_location.php",
                type: "post",
                async: false,
                success: (c)=>{
                  //alert(c)
                 callback= c
                }
            })
       return callback
       

    }
    
   function getEtimatedDistances(){
     $.ajax({
      url: 'login/php/show_farmers_location.php',
      type: 'post',
      data: 'json',
      success: (e)=>{
      var new_array = e.split('/')
      //var my_location = "Moi"
      var directionsService = new google.maps.DirectionsService();
      var numbering =1;
      //var directionsRenderer = new google.maps.DirectionsRenderer();
      for (var i = 0; i<new_array.length;i++) {



        var origin1 =  returnFarmerLocation();
        //console.log(origin1)
        var destination3 = new_array[i];
        var track_name = destination3.split('=')
        //directionsRenderer.setMap(map);
        for (var k = 0; k<track_name.length;k++) {
          var final_track_name = track_name[1].toString()
          var final_track_location = track_name[k++]
          console.log(final_track_name)
          var request1 = {
          origin: origin1,
          destination: final_track_location,
          travelMode: "DRIVING",
        };
        directionsService.route(request1, function (result, status) {
          if (status == "OK") {
            var distance1 = result.routes[0].legs[0].distance.value;
            var distance_in_km = distance1/1000;
             console.log(distance_in_km)

            if (distance_in_km<=2) {
              showNotifications()
              if (final_track_name==='') {

              }else{
                 $("#edit_message").html("<span class='text-danger'><b>Alert!</b></span> You have "+ final_track_name+" within your geofence");
              }

              
              // if (numbering++ ==1) {
              //   $("#edit_message").html("<span class='text-danger'><b>Alert!</b></span> You have one driver within your geofence");
              //   $("#dropdownCounter").html("<span class='text-danger'><b>Alert!</b></span> You have one driver within your geofence")
              // }else{
              //   $("#edit_message").html("<span class='text-danger'><b>Alert!</b></span> You have "+(numbering-1) + " drivers within your geofence");
              //   $("#dropdownCounter").html("<span class='text-danger'><b>Alert!</b></span> You have "+(numbering-1) + " drivers within your geofence");
              // }
              
              //$("#counter").text("1")
             

            }
             $("#dropdownCounter").html("You have no new notification");
            

           // console.log("Distance between " + origin1 + " and " + destination3[i] + " is " + distance1)
          }
        });
      

       // console.log(my_location+"-"+new_array[i])
      }
       }
       
      }
    })
    
   }

// Get the modal
   var modal = $("#myModal");

   // Get the button that opens the modal
   var btn = $(".openModal");

   // Get the <span> element that closes the modal
   var span = $(".close");

   // When the user clicks the button, open the modal 
   btn.click((e)=>{
     modal.css({"display":"block"})
      // Get the current URL
      var currentUrl = window.location.href;

      // Define the new URL
      var newUrl =  $(e.target).val();

      // Push the new URL to the history stack
      window.history.pushState(null, '', newUrl);

      // Update the page content to reflect the new URL
      // For example, you can use jQuery to load new content via AJAX:
      $.ajax({
          url: newUrl,
          success: function(data) {
              //$('#content').html(data);
          }
      });



   })
   function showNotifications(){
    // Get the modal
   var modal = $("#myModal2");

   // Get the button that opens the modal

   // Get the <span> element that closes the modal
   var span = $("#close");

   // When the user clicks the button, open the modal 
    // When the user clicks on <span> (x), close the modal
         span.click(()=>{
           modal.css({"display":"none"})
           
         })
   setTimeout((e)=>{
     modal.css({"display":"block"})



   },4000)
   }



         // When the user clicks on <span> (x), close the modal
         span.click(()=>{
           modal.css({"display":"none"})
           
         })
   
        
    function initMap() {
          var directionsService = new google.maps.DirectionsService();
          var directionsRenderer = new google.maps.DirectionsRenderer();
           getEtimatedDistances()
          $("#directions_btn").click(()=>{
          var origin = $("#origin").val()
          var destination = $("#destination").val();
          var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 8,
            center: { lat: 37.7749, lng: -122.4194 },
          });
         
          
          directionsRenderer.setMap(map);
          var request = {
            origin: origin,
            destination: destination,
            travelMode: "DRIVING",
          };
          directionsService.route(request, function (result, status) {
            if (status == "OK") {
              directionsRenderer.setDirections(result);
              var distance = result.routes[0].legs[0].distance.text;
              $("#totalDistance").text("Distance between " + origin + " and " + destination + " is " + distance)
            }
          });
      })
          

              var geocoder = new google.maps.Geocoder();
              var latlng = new google.maps.LatLng(0, 0);
              navigator.geolocation.watchPosition(function(position) {
                //coordinates of my place at Kesses
                latlng = {lat: position.coords.latitude, lng: position.coords.longitude};
              
                geocoder.geocode({ 'latLng': latlng }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                  if (results[0]) {
                  var origin4  = results[0].formatted_address;  
                 // alert(origin4) 
                 // var destination1 = "Kesses,Uasin Gishu";
                   var fd = new FormData()
                      //$("showMoreInfo").html()
                      fd.append("origin", origin4)
                      $.ajax({
                        url: "login/php/update_location.php",
                        type: "post",
                        data : fd,
                        contentType: false,
                        processData: false,
                        success: (e)=>{
                          //alert(e)
                        }
                      })

                       }
                    } else {
                      alert("Geocode was not successful for the following reason: network " + status);
                    }
                  });
              


                  var map2 = new google.maps.Map(document.getElementById("map2"), {
                    zoom: 8,
                    center: { lat: 37.7749, lng: -122.4194 },
                  });
                    
                  var url_str = window.location.href;
                  var directionsRenderer = new google.maps.DirectionsRenderer();
                  let url = new URL(url_str);
                  let search_params = url.searchParams; 
                  let route = search_params.get('location');
                  if (route !="") {
                    var array = route.split(':');
                    var new_origin = array[0];
                    var new_destination = array[1];
                    //alert(new_destination)
                    directionsRenderer.setMap(map2);
                    var request2 = {
                      origin: new_origin,
                      destination: new_destination,
                      travelMode: "DRIVING",
                    };
                    directionsService.route(request2, function (result, status) {
                      if (status == "OK") {
                        setTimeout(()=>{
                          directionsRenderer.setDirections(result);
                         var distance = result.routes[0].legs[0].distance.text;
                       
                        $("#geofence").text("Track Distance from your Geofence:"+ distance)
                        },2000) 
                      }
                  });

                  }
                  
                       
                     
                
            });

                       
                   
          
      
    }
   
    $(document).ready(()=>{
      initMap();
     


      })
  </script>

</body>

</html>