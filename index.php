<!DOCTYPE html>
<html lang="en"> 
   <head>
      <?php include('template-parts/head.php') ?>
      <title>Extended Stay Hotel New Haven | New Haven Village Suites</title>
      <meta name="description" content="If you are looking for an extended stay hotel New Haven CT, New Haven Village Suite is the perfect location. Call 203-777-5337 to book your stay now.">
      <meta name="keywords" content="Extended Stay,Hotel,New Haven,CT">
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
      <style>body, html {             height:100%; width:100%;
         }
         main {
         padding:0!important;
         }
         .right-sidebar {             padding-left:0;
         background:#fff;
         border-left:3px solid #fff; 
         }
		  @media screen and (max-width: 767px){
			  .right-sidebar{
				  border: 0;
				  padding: 0 2%;
			  }  
		  }
         @media  screen and (min-width:1200px) {
         main { padding-right:350px!important; }
         }
         @media  screen and (min-width:1400px) {
         main { padding-right:400px!important; }
         }
      </style>
   </head>
   <body>
      <div class="wrapper">
         <?php include('template-parts/header.php'); ?>
         <main class="two-col">
            <div class="img-holder" style="background-image: none; position: relative; z-index: 0; background-position: initial initial; background-repeat: initial initial;">
               <div class="backstretch-caption"></div>
               <noscript class="noscript">
                  <div>
                     <i role="presentation" class="fa fa-exclamation-triangle"></i> We wish to provide the best possible experience for all our visitors. That being said, we recommend using Javascript to view this site. 
                     We don't abuse it (no scrollbar hijacking, for example.)
                  </div>
                  >
               </noscript>
            </div>
         </main>
         <section class="right-sidebar">
            <div class="cta" style="background-image:url('images/cta-live-with-us.jpg');">
               <form method="POST" action="booking/index.php">
                  <input type="hidden" name="_token" value="meW0XrEY1RZcLkJjJeb2Lten5ffyVldefVihPeDP">
                  <h2>Stay With Us</h2>
                  <input type="text" name="in" class="calendar-field" placeholder="Arrive" id="">
                  <input type="text" name="out" class="calendar-field" placeholder="Depart" id="">
                  <input type="submit" class="button" value="Book Suites">
               </form>
            </div>
            <div class="cta" style="background-image:url('images/cta-stay-with-us.jpg');">
               <form>
                  <h2>Live With Us</h2>
                  <a class="button" href="live-with-us">Learn More</a>
               </form>
            </div>
            <div class="cta" style="background-image:url('images/cta-group-stay.jpg'); background-position:center;">
               <form>
                  <h2>Group Stay</h2>
                  <a class="button" href="group-stay">Get A Quote</a>
               </form>
            </div>
         </section>
         <?php include('template-parts/footer.php'); ?>
         <script type="text/javascript">
            $( document ).ready(function() {
                $( ".calendar-field" ).datepicker();
                /*
                $(".img-holder").backstretch([
                { "images/homepage/slide-1.jpg", caption: "This is the first caption." },
                { "http://newhavenvillagesuites.com/images/homepage/slide-2.JPG", caption: "This is the first caption." },
                "http://newhavenvillagesuites.com/images/homepage/slide-3.JPG",
                "http://newhavenvillagesuites.com/images/homepage/slide-4.jpg",
                "http://newhavenvillagesuites.com/images/homepage/slide-5.jpg",
                "http://newhavenvillagesuites.com/images/homepage/slide-6.jpg",
                "http://newhavenvillagesuites.com/images/homepage/slide-7.jpg"
                ], { duration: 3000, fade: 750 });
                */

                console.log( "ready!" );
                var items = [
                    { img: "images/homepage/slide-7.jpg", caption: '"They stock my groceries and took care of my laundry." J.F.'},
                    { img: "images/homepage/slide-5.jpg", caption: '"My kids loved Jordan\'s rope course! Just a short walk away." J.W.'},
                    { img: "images/homepage/slide-3.JPG", caption: '"Courteous and friendly staff." J.C.'},
                    { img: "images/homepage/slide-2.JPG", caption: '"Great place while you settle." C.S.'},
                    { img: "images/homepage/slide-4.jpg", caption: '"Tranquil, spacious and convenient." M.L.'},
                    { img: "images/homepage/slide-6.jpg", caption: '"Enjoyable for a family gathering." P.A.'},
                    { img: "images/homepage/slide-1.jpg", caption: '"Shuttle takes me anywhere in New Haven." J.M.'},
                    { img: "images/homepage/slide-8.jpg", caption: '"The staff made my day memorable." T.S.'},
                    { img: "images/homepage/slide-9.jpg", caption: '"They drove me in a golf cart to my room." A.M.'},
                    { img: "images/homepage/slide-10.jpg", caption: '"Looks and feels like a condo." M.M.'},
                ];
                /*console.log( "ready!" );
                var items = [
                    { img: "images/homepage/slide-10.jpg", caption: '"They stock my groceries and took care of my laundry." J.F.'},
                    { img: "images/homepage/slide-10.jpg", caption: '"My kids loved Jordan\'s rope course! Just a short walk away." J.W.'},
                    { img: "images/homepage/slide-10.JPG", caption: '"Courteous and friendly staff." J.C.'},
                    { img: "images/homepage/slide-10.JPG", caption: '"Great place while you settle." C.S.'},
                    { img: "images/homepage/slide-10.jpg", caption: '"Tranquil, spacious and convenient." M.L.'},
                    { img: "images/homepage/slide-10.jpg", caption: '"Enjoyable for a family gathering." P.A.'},
                    { img: "images/homepage/slide-10.jpg", caption: '"Shuttle takes me anywhere in New Haven." J.M.'},
                    { img: "images/homepage/slide-10.jpg", caption: '"The staff made my day memorable." T.S.'},
                    { img: "images/homepage/slide-10.jpg", caption: '"They drove me in a golf cart to my room." A.M.'},
                    { img: "images/homepage/slide-10.jpg", caption: '"Looks and feels like a condo." M.M.'},
                ];*/

                var images = $.map(items, function(i) { return i.img; });

                $(".img-holder").backstretch(images,  { duration: 3000, fade: 750 });
                $(window).on("backstretch.show", function(e, instance) {
                 var newCaption = items[instance.index].caption;
                 $(".backstretch-caption").text( newCaption );
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
      </div>
   </body>
</html>