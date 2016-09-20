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
    
</head>

<body>
    
    <div class="wrapper"> 	
    <?php include('../../template-parts/header.php'); ?>

			<main class="two-col">
            <h1>Two Bedroom Suite</h1>
    
    <div class="cycle-slideshow room-slideshow" data-cycle-fx="scrollHorz" data-cycle-swipe="true" data-cycle-timeout="3000" style="position: relative;">
        <img src="../../images/galleries/nhvs-interior-1.jpg" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 99; visibility: hidden;">
        <img src="../../images/galleries/nhvs-interior-8.jpg" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 97; visibility: hidden;">
        <img src="../../images/galleries/nhvs-interior-5.jpg" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 96; visibility: hidden;">
        <img src="../../images/galleries/nhvs-interior-10.jpg" class="cycle-slide" style="position: absolute; top: 0px; left: 0px; z-index: 95; visibility: hidden;">
    </div>

    <p>With a private exterior stairway access, our two bedroom hotel suites — comprised of 1,200 square feet — are located on the second floor and boast a large townhouse style space. A queen size bed, bathroom, and TV are located in the loft on the second level; while the first level offers a king size bed, separate bathroom, and additional TV. As with all other spaces, a living and dining area is offered along with a fully equipped kitchen. And let’s not forget the fireplaces featured in each suite to cozy up to with your loved ones.</p>
    <p>*We are in the process of renovating our suites. Please inquire on the availability of a renovated suite when you book.</p>
    
    <h2 class="bar-heading">Room Amenities</h2>
    <ul class="list col-list amenities-list">
        <li style="background-image:url('../../images/icons/amenities/bed.png')">Luxury Bedding with Pillow Top Mattress</li>
        <li style="background-image:url('../../images/icons/amenities/wifi.png')">Wireless Internet</li>
        <li style="background-image:url('../../images/icons/amenities/tv.png')">Flat Screen HD TV <em>(with Premium Channels CNN, HBO, ESPN, and more)</em></li>
        <li style="background-image:url('../../images/icons/amenities/alarm.png')">Alarm Clock</li>
        <li style="background-image:url('../../images/icons/amenities/crib.png')">Cribs <em>(available upon request)</em></li>
        <li style="background-image:url('../../images/icons/amenities/fireplace.png')">Fireplace</li>
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
            <a href="../../images/galleries/nhvs-interior-1.jpg" data-lightbox="nhvs-interior">
                <img src="../../images/galleries/thumb/nhvs-interior-1.jpg">
            </a>
            <a href="../../images/galleries/nhvs-interior-3.jpg" data-lightbox="nhvs-interior">
                <img src="../../images/galleries/thumb/nhvs-interior-3.jpg">
            </a>
            <a href="../../images/galleries/nhvs-interior-4.jpg" data-lightbox="nhvs-interior">
                <img src="../../images/galleries/thumb/nhvs-interior-4.jpg">
            </a>
            <a href="../../images/galleries/5-1-Room-two-bedroom-king-and-queen.png" data-lightbox="two-bedroom-suite">
                <img src="../../images/galleries/thumb/5-1-Room-two-bedroom-king-and-queen.png">
            </a>
            <a href="../../images/galleries/6-1-Room-Two-Bedroom-Ada-Accesible-king-and-queen.png" data-lightbox="two-bedroom-suite">
                <img src="../../images/galleries/thumb/6-1-Room-Two-Bedroom-Ada-Accesible-king-and-queen.png">
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


</div><div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>