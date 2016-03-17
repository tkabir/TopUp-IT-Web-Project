<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <script
      src="http://maps.googleapis.com/maps/api/js">
    </script>

    <script>
      var myCenter=new google.maps.LatLng(23.7231,90.4086);

      function initialize()
      {
      var mapProp = {
        center:myCenter,
        zoom:16,
        mapTypeId:google.maps.MapTypeId.ROADMAP
        };

      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

      var marker=new google.maps.Marker({
        position:myCenter,
        });

      marker.setMap(map);
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

  </head>
  
  <body>
  	<?php $site_url="http://localhost/mybook/"; ?>