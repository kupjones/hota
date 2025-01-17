<!DOCTYPE html>
<html lang="en">
    <style>
        table, th, td {
          border:1px solid black;
        }
        </style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="3600">
    <meta name="revisit-after" content="2 days">
    <meta name="robots" content="index,follow">
    <meta name="description" content="Hair Of The Arts - The Future of Hair Replacement">
    <meta name="keywords" content="hair, hair replacement, wig, toupee, bald, rogain, propecia, austin, texas, non-surgical, custom">
    <meta name="author" content="dhchair@hairofthearts.com">

    
    <title>Hair of the Arts</title>
    

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/picture-slides.css" rel="stylesheet">

    <!-- Sticky Header CSS -->
    <link href="css/header.css" rel="stylesheet">    

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom Announcement Popup -->
    <script>
        function Announcement(msg) {
        alert(msg);
    }
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



<!-- <body onload="Announcement('This is an announcement')"> -->
<body>


    

<!--    <div id="home" class="brand">Hair of the Arts</div>  
    <div class="address-bar">13915 N MoPac Expressway Service Rd, Unit 302 <br>Austin, TX 78728 | 512-834-1231</div>
-->

    <div class="container">

        <div class="row">
            <div class="box">

                <div class="col-lg-12 text-center">
               
                    <div class="stickyheader" id="myHeader">
                        <a href="index.php"><img class="img-responsive img-full" src="img/bg_head_middle-short.jpg" alt="" ></a> 
                        <div class="navbar-nav navbar-header">
                            <ul class="nav">
                                <li><a href="/index.php#home">Home</a></li>
                                <li><a href="/about.php">About</a></li>
                                <li><a href="/blog.php">FAQ</a></li>
                                <li><a href="/testimonials.php">Testimonials</a></li>
                                <li><a href="/guarantee.php">Our Guarantee</a></li>
                                <li><a href="/virtual-tour.php">Virtual Tour</a></li>

                            </ul>
                        </div>
                    </div>
                    
                    <hr class="tagline-divider">
                    <h2>
           
                            <strong>Austin Texas' ONLY Non-Surgical Men's Hair Replacement Since 1982</strong>
          
                    </h2>

         
                    <h2 class="intro-text text-center">
                        <strong>The #1 Rated Non-Surgical Technology That Replaces Men&#39;s Hair Loss with the most natural hair styles.</strong>
                    </h2>
                    <hr>
                                                          
                    <table style="width:100%;">

                                <!-- This is the check for the file "announcement.md" that is created in HTMLy for dynamic annoucements -->
                                <?php 
                                    if (file_exists("/home/hairofth/public_html/blog.hairofthearts.com/content/static/announcement.md"))  {
                                        echo "<tr style='height:100px'>";
                                        echo "<td colspan='2' style='width:50%; text-align: match-parent; vertical-align: middle;'>";
                                        echo "<center> <h1>Announcement:</h1> </center>";
                                        echo "<h3>";
                                        echo file_get_contents("/home/hairofth/public_html/blog.hairofthearts.com/content/static/announcement.md");
                                        echo "</h3>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                        

                        <tr style="height:420px">
 
                            <td style="width:50%; text-align: match-parent; vertical-align: middle;">
                                <h3>
                                100% Custom Men's Hair-Systems with many personalized design options.<br><br>
                                Austin's ONLY stress & risk free 30-Day Money Back Guarantee.<br><br>
                                Serving men in Texas for over 40 Years. <br><br>
                                Client owned since 1982.
                                </h3>
                            </td>
                            <td style="width:50%" class="intro-text">

                               <div class="slideshow-container">

                                    <div class="mySlides1">
                                        <img class="picture-contain" src="img/clients/Bryan-web.png" style="width:95%"  >
                                    </div>
                               


                                     <div class="mySlides1">
                                        <img class="picture-contain" src="img/clients/GAA-web.png" style="width:95%"  >
                                    </div>

                                    <div class="mySlides1">
                                        <img class="picture-contain" src="img/clients/GAHL-web.png" style="width:95%"  >
                                    </div>                                    
 
                                    <div class="mySlides1">
                                        <img class="picture-contain" src="img/clients/client5-1.png" style="width:95%">
                                    </div>
                                    
                                    <div class="mySlides1">
                                        <img class="picture-contain" src="img/clients/client5-2.png" style="width:95%">
                                    </div>                                    

                                    <div class="mySlides1">
                                        <img class="picture-contain" src="img/clients/client5-3.png" style="width:95%">
                                    </div>


                                    <div class="mySlides1">
                                        <img class="picture-contain" src="img/XTS-closeup.jpg" style="width:95%">
                                    </div>
                                        <a class="prev" onclick="plusSlides(-1, 0)">&#10094; prev</a>
                                        <a class="next" onclick="plusSlides(1, 0)">next &#10095;</a>
                                </div>
    
                            </td>
 
                        </tr>
                        <tr style="height:425px">
                            <td style="width:50%;">
                                <div class="slideshow-container">
                                    <div class="mySlides2">
                                        <img class="picture-contain" src="img/office.jpg" style="width:95%" onclick="enlargeImg()" id="img1">
                                    </div>

                                    <div class="mySlides2">
                                      <img class="picture-contain" src="img/hota-street-map.png" style="width:95%; height:340px">
                                    </div>

                                    <a class="prev" onclick="plusSlides(-1, 1)">&#10094; prev</a>
                                    <a class="next" onclick="plusSlides(1, 1)">next &#10095;</a>
                                </div>



                            </td>
                            <td style="width:50%; text-align: match-parent; vertical-align: middle;" class="intro-text">
                                <h3>
                                    Professional building for total privacy.<br><br>
                                    Private rest room and private styling rooms.<br><br>
                                    Rooms with city views and HDTV.<br><br>
                                </h3>    
                                
                            </td>
                        </tr>
                    </table>
                    <hr class="visible-xs">
                    <hr>
                    <h2 class="intro-text text-center">Contact:<strong>Bryan at Hair of the Arts</strong></h2>
                    <hr>
                 </div>       
                <div class="clearfix"></div>
            </div>
        </div>
        



        

    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    Phone:<strong>512-834-1231</strong> <br/>
                    13915 N MoPac Expressway Service Rd, Unit 302, Austin, TX 78728 <br/>
                    Business Hours: <strong>Tuesday - Friday, 10am - 6pm CST (Closed Weekends)</strong><br/>                   
                    <div class="copyright">Copyright &copy; Hair of the Arts 2023</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Picture Slide Code -->
    <!-- <script src="js/picture-slides.js"></script> -->
    <script src="js/multi-picture-slides.js"></script>

    <!-- Floating Header script-->
    <!-- <script src="js/header.js"></script> -->

    <script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Organization",

      
      "name" : "Hair of the Arts",
      

      
      "url" : "\/\/dev.hairofthearts.com",
      

      

      
      "contactPoint" : [{
        "@type" : "ContactPoint",
        "telephone" : "512-834-1231",
        "contactType" : "customer service"
      }]
      
    }
</script>

<!-- script to set display property -->
<script>
    // Get the img object using its Id
    img = document.getElementById("img1");
    // Function to increase image size
    function enlargeImg() {
        // Set image size to 1.5 times original
        img.style.transform = "scale(1.5)";
        // Animation effect
        img.style.transition = "transform 0.25s ease";
    }
    // Function to reset image size
    function resetImg() {
        // Set image size to original
        img.style.transform = "scale(1)";
        img.style.transition = "transform 0.25s ease";
    }
</script>

  

</body>

</html>
