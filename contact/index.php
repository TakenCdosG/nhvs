<!DOCTYPE html>
<html lang="en"><head>
	<?php include('../template-parts/head.php') ?>
   <title>Contact | New Haven Village Suites</title>
    <meta name="description" content="Contact New Haven Village Suites New Haven CT today at 203-777-5337 to book your stay wth us. We have furnished pet friendly rooms and are close to Yale.">
    <meta name="keywords" content="New Haven Village Suites,Village,Suites,New Haven,CT">
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
         <?php include('../template-parts/header.php'); ?>

			<main class="two-col">
            <h1>Contact Us</h1>
    <p>We understand you have questions when booking your vacation or business travel to New Haven. Please feel free to contact us at any time. The knowledgeable staff at New Haven Village Suites is always happy to help. Call us at <a href="tel:2037775337">203-777-5337</a> or use the contact form below and we'll get back to you promptly. We look forward to hearing from you!</p>
    <form method="POST" action="../send_mail.php" accept-charset="UTF-8" class="contact-form"><input name="_token" type="hidden" value="meW0XrEY1RZcLkJjJeb2Lten5ffyVldefVihPeDP">
             <label for="name">Name</label>
        <input placeholder="Full Name" maxlength="100" name="name" type="text" id="name" required>
        <label for="email">Email</label>
        <input placeholder="Email Address" maxlength="100" name="email" type="email" id="email" required>
        <label for="phone">Phone (optional)</label>
        <input placeholder="Phone Number (optional)" maxlength="20" name="phone" type="tel" id="phone">

        <label for="message" aria-hidden="true">Message</label>
        <textarea placeholder="Enter Message" maxlength="140" name="message" cols="50" rows="10" id="message" required></textarea>
        <input class="button" type="submit" value="Get In Touch" id="submit_btn">
    </form>
<br>
    <h2>Employment</h2>
    <p>At New Haven Village Suites, we search for inspired, dedicated, and engaged industry leaders to join our team. Our vibrant organization offers professional growth, an exciting work environment, and a challenging career in the hospitality industry.</p>
    <p>Please contact the hotel directly at <strong>203-777-5337</strong>.</p>
    </main>
    <section class="right-sidebar">
        <div class="cta" style="background-image:url('../images/cta-live-with-us.jpg');">
            <form method="POST" action="../booking/index.php">
    <input type="hidden" name="_token" value="meW0XrEY1RZcLkJjJeb2Lten5ffyVldefVihPeDP">
    <h2>Stay With Us</h2>
    <input type="text" name="in" class="calendar-field" placeholder="Arrive" id="">
    <input type="text" name="out" class="calendar-field" placeholder="Depart" id="">
    <input type="submit" class="button" value="Book Suites">
    </form>        </div>
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
    <?php include('../template-parts/footer.php'); ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44812422-17', 'auto');
        ga('send', 'pageview');

    </script>


</div></body></html>