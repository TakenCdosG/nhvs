<!DOCTYPE html>
<html lang="en"><head>
	<?php include('../../template-parts/head.php') ?>
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
        <style>@media  screen and (max-width:1200px) { .cta { width:49%; } }
    </style>
</head>

<body>
    
    <div class="wrapper"> 	
    <?php include('../../template-parts/header.php'); ?>

			<main class="two-col">
            <h1>ADA Suite</h1>
    
    <div class="cycle-slideshow room-slideshow" data-cycle-fx="scrollHorz" data-cycle-swipe="true" data-cycle-timeout="3000" style="position: relative;"><img src="../../images/galleries/nhvs-interior-3.jpg" class="cycle-slide cycle-sentinel" style="position: static; top: 0px; left: 0px; z-index: 100; opacity: 1; display: block; visibility: hidden;">

        
        
        
        
        
    <img src="../../images/galleries/nhvs-interior-3.jpg" class="cycle-slide cycle-slide-active" style="position: absolute; top: 0px; left: 0px; z-index: 100; opacity: 1; display: block; visibility: visible;"><img src="../../images/galleries/nhvs-interior-1.jpg" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 99; visibility: hidden;"><img src="../../images/galleries/nhvs-interior-8.jpg" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 97; visibility: hidden;"><img src="../../images/galleries/nhvs-interior-5.jpg" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 96; visibility: hidden;"><img src="../../images/galleries/nhvs-interior-10.jpg" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 95; visibility: hidden;"></div>

    <p>Our spacious ADA executive suites are located on the first floor and have been designed to offer easy access and comfortable accommodations for guests with disabilities. Our spacious executive studio is equipped with a queen size bed, living and dining areas, and a full kitchen.</p>
    <p>We are happy to <a href="../../contact">customize your stay</a> based on your needs.</p>
    <p>*We are in the process of renovating our suites. Please inquire on the availability of a renovated suite when you book.</p>

    <h2 class="bar-heading">Room Amenities</h2>
    <ul class="list col-list amenities-list">
        <li style="background-image:url('../../images/icons/amenities/bed.png')">Luxury Bedding with Pillow Top Mattress</li>
        <li style="background-image:url('../../images/icons/amenities/wifi.png')">Wireless Internet</li>
        <li style="background-image:url('../../images/icons/amenities/tv.png')">Flat Screen HD TV <em>(with Premium Channels CNN, HBO, ESPN, and more)</em></li>
        <li style="background-image:url('../../images/icons/amenities/alarm.png')">Alarm Clock</li>
        <li style="background-image:url('../../images/icons/amenities/crib.png')">Cribs <em>(available upon request)</em></li>
        <li style="background-image:url('../../images/icons/amenities/sofa.png')">Pull-Out Sofa Beds</li>
        <li style="background-image:url('../../images/icons/amenities/pillows.png')">Foam &amp; Down / Feather Pillows</li>
        <li style="background-image:url('../../images/icons/amenities/hairdryer.png')">Hair Dryer</li>
        <li style="background-image:url('../../images/icons/amenities/climate.png')">Individual Climate Control <em>(with Air Conditioning)</em></li>
        <li style="background-image:url('../../images/icons/amenities/iron.png')">Iron &amp; Ironing Board</li>
        <li style="background-image:url('../../images/cat_one_paw_blue.png')">Pet Friendly</li>
    </ul>

    <a class="button" href="../../services-amenities">Community Features</a>
    </main>
    <section class="right-sidebar">
            <div class="gallery">
        <h3>Gallery</h3>
        <div>
            <a href="../../images/galleries/executive-studio-suite-1.jpg" data-lightbox="executive-studio">
                <img src="../../images/galleries/thumb/executive-studio-suite-1.jpg">
            </a>
            <a href="../../images/galleries/executive-studio-suite-2.jpg" data-lightbox="executive-studio">
                <img src="../../images/galleries/thumb/executive-studio-suite-2.jpg">
            </a>
            <a href="../../images/galleries/4-1-Room-Executive-one-beedrom-king.png" data-lightbox="executive-studio">
                <img src="../../images/galleries/thumb/4-1-Room-Executive-one-beedrom-king.png">
            </a>
        </div>    
    </div>
    <div class="cta suite-cta" style="background-image:url('../../images/cta-stay-with-us.jpg');">
        <form method="POST" action="../../booking/index.php">
    <input type="hidden" name="_token" value="meW0XrEY1RZcLkJjJeb2Lten5ffyVldefVihPeDP">
    <h2>Stay With Us</h2>
    <input type="text" name="in" class="calendar-field" placeholder="Arrive" id="">
    <input type="text" name="out" class="calendar-field" placeholder="Depart" id="">
    <input type="submit" class="button" value="Book Suites">
    </form>    </div>
    </section>

    <?php include('../../template-parts/footer.php'); ?>
    <script type="text/javascript" src="../../js/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.cycle2.carousel.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($){
        
        var slideshows = $('.cycle-slideshow').on('cycle-next cycle-prev', function(e, opts) {
            slideshows.not(this).cycle('goto', opts.currSlide);
        });

        $('#cycle2 .cycle-slide').click(function(){
            var index = $('#cycle2').data('cycle.API').getSlideIndex(this);
            slideshows.cycle('goto', index);
        });

    });

    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44812422-17', 'auto');
        ga('send', 'pageview');

    </script>


</div></body></html>