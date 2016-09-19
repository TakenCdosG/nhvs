<!DOCTYPE html>
<html lang="en">
<head>
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
    </head>

<body>
    
    <div class="wrapper">
    <?php include('../template-parts/header.php') ?>

			<main class="two-col">
            
    <h1>Thank You for Contacting Us</h1>

    </main>
    <section class="right-sidebar">
        <div class="cta" style="background-image:url('../images/cta-live-with-us.jpg');">
            <form method="POST" action="../booking/index.php">
    <input type="hidden" name="_token" value="nTDjP6ZNt2ZSRWdbyO3oyfhZEjMwwOeWWETSn7Uo">
    <h2>Stay With Us</h2>
    <input type="text" name="in" class="calendar-field" placeholder="Arrive">
    <input type="text" name="out" class="calendar-field" placeholder="Depart">
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
    <?php include('../template-parts/footer.php') ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44812422-17', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>
