<!DOCTYPE html>
<html lang="en"><head>
	<?php include('../template-parts/head.php') ?>
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
    <?php include('../template-parts/header.php') ?>

			<main class="two-col">
            <h1>Group Stay</h1>
    <p>New Haven Village Suites is the perfect location for groups and corporate clients. Our rooms are 50% more spacious than a standard hotel room and include a fully equipped kitchen in all 112 guest suites. We offer complimentary parking and provide a complimentary shuttle with in a 3 mile radius, 7 days a week, which includes transportation to and from Tweed Airport, Union Station, Yale University, UNH, Yale Hospital and Smilow Cancer Center, as well as many other key locations. A complimentary full hot buffet breakfast is served daily — a great start for any group or corporate guest.</p>
    <form method="POST" action="send_mail.php" accept-charset="UTF-8" class="contact-form"><input name="_token" type="hidden" value="meW0XrEY1RZcLkJjJeb2Lten5ffyVldefVihPeDP">
               <label for="name">Name</label>
        <input placeholder="Full Name" maxlength="100" name="name" type="text" id="name" required>
        <label for="email">Email</label>
        <input placeholder="Email Address" maxlength="100" name="email" type="email" id="email" required>
        <label for="phone">Phone (optional)</label>
        <input placeholder="Phone Number (optional)" maxlength="20" name="phone" type="tel" id="phone">
        <label for="organization">Group or Organization (optional)</label>
        <input placeholder="Name of Group or Organization" name="organization" type="text" id="organization">

        <div class="form-two-col" style="padding-right:.375em;">
            <label for="checkin">Checkin Date</label>
            <input class="calendar-field" placeholder="Check In" name="checkin" type="text" id="checkin" required>
        </div><div class="form-two-col" style="padding-left:.375em;">
            <label for="checkout">Checkout Date</label>
            <input class="calendar-field" placeholder="Check Out" name="checkout" type="text" id="checkout" required>
        </div>


        <label for="num_room">Number of Rooms</label>
        <select name="num_room" id="num_room" required><option value="" selected="selected" disabled="disabled">Select Number of Rooms</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15plus">15+ (Specify Below)</option></select>

        <label for="room_type">Type of Rooms <em>(If you'd like multiple room types, please specify in the box below)</em></label>
        <select name="room_type" id="room_type" required><option value="" selected="selected" disabled="disabled">Select Type of Room</option><option value="no-preference">No Preference</option><option value="Studio Suite">Studio Suite</option><option value="One Bedroom Suite">One Bedroom Suite</option><option value="Two Bedroom Suite">Two Bedroom Suite</option><option value="ADA Studio Suite">ADA Studio Suite</option></select>

        <label for="notes">Other notes <em>(optional)</em></label>
        <textarea id="notes" placeholder="Message" name="notes" cols="50" rows="10"></textarea>
        <input class="button" type="submit" value="Get A Quote">
    </form>
    </main>
         <section class="right-sidebar">
            <div class="cta" style="background-image:url('../images/cta-live-with-us.jpg');">
               <form method="POST" action="../booking/index.php">
                  <input type="hidden" name="_token" value="meW0XrEY1RZcLkJjJeb2Lten5ffyVldefVihPeDP">
                  <h2>Stay With Us</h2>
                  <input type="text" name="in" class="calendar-field" placeholder="Arrive" id="">
                  <input type="text" name="out" class="calendar-field" placeholder="Depart" id="">
                  <input type="submit" class="button" value="Book Suites">
               </form>
            </div>
            <div class="cta" style="background-image:url('../images/cta-stay-with-us.jpg');">
               <form>
                  <h2>Live With Us</h2>
                  <a class="button" href="../live-with-us">Learn More</a>
               </form>
            </div>
            <div class="cta" style="background-image:url('../images/cta-group-stay.jpg'); background-position:center;">
               <form>
                  <h2>Group Stay</h2>
                  <a class="button" href="../group-stay">Get A Quote</a>
               </form>
            </div>
         </section>
         <?php include('../template-parts/footer.php') ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44812422-17', 'auto');
        ga('send', 'pageview');

    </script>


</div></body></html>
