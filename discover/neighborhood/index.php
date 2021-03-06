<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include('../../template-parts/head.php') ?>
      <style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style>
      <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
      <style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style>
      <style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style>
      <style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style>
      <title>New Haven Village Suites</title>
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="msapplication-TileImage" content="/mstile-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-76674937-1', 'auto');
        ga('send', 'pageview');
      </script>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>h1 { padding-bottom:10px; }
         label.button { float:right; margin-left:10px; padding:8px 20px; width:auto; }
         label.button img { width:33px; margin-bottom:-2px; margin-right:5px }
      </style>
      <script type="text/javascript">
         document.write=function() {};
         document.writeln=function() {};
      </script>
       <script type='application/ld+json'> 
    {
        "@context": "http://www.schema.org",
        "@type": "Local Business",
        "name": "New Haven Village Suites",
        "url": "http://newhavenvillagesuites.com/",
        "description": "New Haven Village Suites is an extended stay hotel, designed for people looking for flexibility and ease of living. Our community offers the conveniences of a hotel with the comforts of home. Whether you are traveling for business or pleasure, a day, a week, a month or a year, we will provide you with everything you need for a pleasant stay.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "3 Long Wharf Drive",
            "addressLocality": "New Haven",
            "addressRegion": "Connecticut",
            "postalCode": "06511",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "41.2885066",
            "longitude": "-72.9315693"
        },
        "hasMap": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.9355751025473!2d-72.93156928457728!3d41.28850657927338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e7d842161a3b13%3A0xc0c3f72ff384d2a8!2sNew+Haven+Village+Suites!5e0!3m2!1sen!2sus!4v1476995441225"
    }
    </script>
</head>
   <body>
      <div class="wrapper">
		  <?php include('../../template-parts/header.php') ?>
         <main class="two-col">
            <h1>Neighborhood</h1>
            <label for="radius-toggle" class="button">
            <input type="checkbox" id="radius-toggle" style="display:none">
            <img src="../../images/icons/amenities/shuttle-w.png" alt="Shuttle Radius">
            Shuttle Radius
            </label>
            <p>Select a category below to view nearby locations. Click the button on the right to toggle the NHVS complimentary shuttle service radius.</p>
            <form class="map-buttons">
               <input name="layer" type="radio" id="dining" onclick="toggleLayer(layerDining);">
               <label for="dining">
               <img src="../../images/icons/m-explore-dining.png" alt="Dining in New Haven">
               Dining
               </label><!--
                  --><input name="layer" type="radio" id="entertainment" onclick="toggleLayer(layerEntertainment);">
               <label for="entertainment">
               <img src="../../images/icons/m-explore-entertainment.png" alt="Entertainment in New Haven"> 
               Entertainment
               </label><!--
                  --><input name="layer" type="radio" id="attractions" onclick="toggleLayer(layerAttractions);">
               <label for="attractions">
               <img src="../../images/icons/m-explore-attractions.png" alt="Attractions in New Haven">
               Attractions
               </label><!--
                  --><input name="layer" type="radio" id="shopping" onclick="toggleLayer(layerShopping);">
               <label for="shopping">
               <img src="../../images/icons/m-explore-shopping.png" alt="Shopping in New Haven">
               Shopping
               </label>
            </form>
            <div id="map" style="">
            </div>
            <br>
            <h2>Getting Around</h2>
            <ul class="list">
               <li><a href="../../images/community-map.jpg" target="_blank">New Haven Village Suites Community Map</a></li>
               <li><a href="http://www.cttransit.com/uploads_RTDivisionSystem/NH_SysMap_2013.pdf" target="_blank">New Haven Metro Area Bus System Map</a></li>
            </ul>
         </main>
         <section class="right-sidebar">
            <div class="cta" style="background-image:url('../../images/cta-live-with-us.jpg');">
               <form method="POST" action="../../booking/index.php">
                  <input type="hidden" name="_token" value="meW0XrEY1RZcLkJjJeb2Lten5ffyVldefVihPeDP">
                  <h2>Stay With Us</h2>
                  <input type="text" name="in" class="calendar-field" placeholder="Arrive" id="">
                  <input type="text" name="out" class="calendar-field" placeholder="Depart" id="">
                  <input type="submit" class="button" value="Book Suites">
               </form>
            </div>
            <div class="cta" style="background-image:url('../../images/cta-stay-with-us.jpg');">
               <form>
                  <h2>Live With Us</h2>
                  <a class="button" href="../../live-with-us">Learn More</a>
               </form>
            </div>
            <div class="cta" style="background-image:url('../../images/cta-group-stay.jpg'); background-position:center;">
               <form>
                  <h2>Group Stay</h2>
                  <a class="button" href="../../group-stay">Get A Quote</a>
               </form>
            </div>
         </section>
         <?php include('../../template-parts/footer.php') ?>
         <script async src="https:/www.google-analytics.com/analytics.js"></script>
         <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrLiYbYEobOgYZpKbzQyuqjvgue6jr8Gc&callback=initMap&libraries=places"></script>
         <script type="text/javascript">
            
            var map, infowindow, layerEntertainment, layerDining, layerAttractions, layerShopping;
            var nhvs = {lat: 41.302581, lng: -72.929365};
            
            function initMap() {
            
            map = new google.maps.Map(document.getElementById('map'), {
            center: nhvs,
            zoom: 13,
            scrollwheel: false
            });
            
            var styles = [
            {
            stylers: [
              { saturation: -40 },
              { lightness: 15 }
            ]
            },{
            featureType: "road",
            elementType: "geometry",
            stylers: [
              { visibility: "simplified" }
            ]
            },{
            featureType: "road",
            elementType: "labels",
            stylers: [
              { lightness: 40 },
              { weight: 3 }
            ]
            }
            ];
            
            map.setOptions({styles: styles});
            
            infowindow = new google.maps.InfoWindow();
            
            // custom marker icon for NHVS
            var nhvsIcon = "http://newhavenvillagesuites.com/images/icons/map-marker.png"
            var homeMarker = new google.maps.Marker({
            position: {lat: 41.288526, lng: -72.929472},
            map: map,
            icon: nhvsIcon,
            title: "<a href='' target='_blank'>New Haven Village Suites</a>"
            });
            // displays marker label for NHVS on icon click
            google.maps.event.addListener(homeMarker, 'click', function() {
            infowindow.setContent(this.title);
            infowindow.open(map, this);
            });
            
            //https://developers.google.com/maps/documentation/javascript/reference?csw=1#Circle
            var circle = new google.maps.Circle({
            map: map,
            radius: 4828.03,    // 3 miles in metres
            fillColor: 'white',
            fillOpacity: 0.3,
            strokeColor:'white'
            });
            circle.bindTo('center', homeMarker, 'position');
            circle.setMap(null);
            circle.setOptions({zIndex:-9999});
            $('#radius-toggle').change(function(){
            $('label.button').toggleClass('selected');
            if($(this).is(':checked')) {
                /*layerEntertainment.setMap(null);  // this would hide all markers when showing radius circle
                layerDining.setMap(null);           // because the markers become unclickable under it
                layerAttractions.setMap(null);      // but since it's easy to toggle i'd prefer not to do this
                layerShopping.setMap(null);*/
                circle.setMap(map);
            } else {
                circle.setMap(null);
            }
            });
            
            // CATEGORIES
            layerEntertainment = new google.maps.FusionTablesLayer({
            query: {
                select: '\'Geocodable address\'',
                from: '1ZFBaA0LeatLvkJoUrAsUnTh7s2VgQCaUjA2dCSim',
            },
            options: {
                styleId: 2,
                templateId: 3
            }
            });
            
            layerDining = new google.maps.FusionTablesLayer({
            query:{
                select: '\'Geocodable address\'',
                from: '14jxLbx6zsE8eLMb3auTMgXdGNuLgDFVaBsEtlvhY'
            },
            options: {
                styleId: 2,
                templateId: 2
            }
            });
            
            layerAttractions = new google.maps.FusionTablesLayer({
            query:{
                select: '\'Geocodable address\'',
                from: '15IjcHtAnHgLWoMKWsChb0-873WXcLGG8lnrZ4l8E'
            },
            options: {
                styleId: 2,
                templateId: 2
            }
            }); 
            
            layerShopping = new google.maps.FusionTablesLayer({
            query:{
                select: '\'Geocodable address\'',
                from: '18WuDqLRxEtCgiv40TB4t9ZS6OXskbwjYiCWuwUPd'
            },
            options: {
                styleId: 2,
                templateId: 2
            }
            });
            
            }
            
            function old_toggleLayer(this_layer){
            if ( this_layer.getMap() ) {
            this_layer.setMap(null);
            }else{
            this_layer.setMap(map);
            }
            }
            
            function toggleLayer(this_layer){
            layerEntertainment.setMap(null);
            layerDining.setMap(null);
            layerAttractions.setMap(null);
            layerShopping.setMap(null);
            this_layer.setMap(map);
            }
            
         </script>
         <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-44812422-17', 'auto');
            ga('send', 'pageview');
         </script>
      </div>
   </body>
</html>