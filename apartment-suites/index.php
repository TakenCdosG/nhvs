<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include('../template-parts/head.php') ?>
      <title>Furnished Apartment New Haven | New Haven Village Suites</title>
      <meta name="description" content="For a furnished apartment New Haven, New Haven Village Suites has what you need and is close to Yale. Call 203-777-5337 for more information.">
      <meta name="keywords" content="Furnished,Apartment,New Haven,CT">
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
            <h1>Apartment Suites</h1>
            <p>Whether you’re traveling for business or visiting your student at Yale, enjoy the convenience of a hotel with the comforts of home during your next stay in New Haven. With great service and a long list of amenities, guests’ needs are always our first priority.</p>
            <p>We are proud to be highly ranked for Business &amp; Leisure on Trip Advisor and awarded AAA Three Diamonds. We are also New Haven´s 1st “Green” Hotel, certified by the Connecticut Department of Environmental Protection and presented with the iStay Green 3 Eco-Leaf Rating and Trip Advisor’s Green Leader status. New Haven Village Suites is the only extended stay hotel in New Haven.</p>
            <a class="button-cta" href="studio-suite" style="background-image:url('../images/galleries/nhvs-interior-3.jpg')">
               <h3>Studio Suite</h3>
            </a>
            <!--
               -->
            <a class="button-cta" href="one-bedroom-suite" style="background-image:url('../images/galleries/nhvs-interior-4.jpg')">
               <h3>One Bedroom Suite</h3>
            </a>
            <!--
               -->
            <a class="button-cta" href="two-bedroom-suite" style="background-image:url('../images/galleries/nhvs-interior-8.jpg')">
               <h3>Two Bedroom Suite</h3>
            </a>
            <!--
               -->
            <a class="button-cta" href="ada-suite" style="background-image:url('../images/galleries/nhvs-interior-5.jpg')">
               <h3>ADA Suite</h3>
            </a>
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
         <?php include('../template-parts/footer.php'); ?>
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