<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ini Web GIS</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

  <link href="<?=base_url ()?>assets/css/BootSideMenu.css" rel="stylesheet">
  <link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />

  <link href="<?=base_url () ?>assets/leaflet/leaflet.css" rel="stylesheet">  
  
  

  

<style type="text/css">
  .user{
    padding:5px;
    margin-bottom: 5px;
  }

  #mapid { height: 480px; }
</style>
</head>
<body>

  <!--Test -->
  <div id="test">
    <h2>Logo</h2>
    <div class="list-group">
      <a href="#" class="list-group-item active">Menu 1</a>
      <a href="#" class="list-group-item">Menu 2</a>
      <a href="#" class="list-group-item">menu 3</a>
     
    </div>





  </div>
  <!--/Test -->

 
 
  <!-- Normale contenuto di pagina-->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
        <h1>Hello World !</h1>
          
          </div>
      </div>
    </div>

    

  </div>


    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
        <div id="mapid"></div>
      
<!--
		  <div id="carbon-block"></div>
<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
          <div><script type="text/javascript">;
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;

</script>
<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>

-->
        </div>
      </div>
    </div>

    

  </div>
  <!--Normale contenuto di pagina-->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="<?=base_url ()?>assets/js/BootSideMenu.js"></script>
  <script src="<?=base_url ()?>assets/leaflet/leaflet.js"></script>
  <script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>

  <script type="text/javascript">
    $('#test').BootSideMenu({side:"left", autoClose:true});
    

    var map = L.map('mapid').setView([-8.1737377,113.7201573], 15);

    var base_url="<?=base_url()?>";

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


$.getJSON(base_url+"welcome/sto_json", function(data){
    $.each(data, function(i, field){

      var v_lat= parseFloat(data[i].lattitude);
      var v_long= parseFloat(data[i].longitude);

      var icon_sto= L.icon({
        iconUrl: base_url+ 'assets/images/powersubstation.png',
        iconSize : [30, 30]
      });

      L.marker([v_long,v_lat], {icon: icon_sto}.addTo(map)
        .bindPopup(data[i].STO_nama)
        .openPopup(),
    });
  });



  </script>

<!--
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 
-->
</body>
</html>