<?php
include("view-reviews.php");
include("includes/connect.php");
include("functions/common_functions.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="homeStyle.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--FONT AWESOME LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- vov.css cdn  -->
    <link href="https://cdn.jsdelivr.net/gh/vaibhav111tandon/vov.css@latest/vov.css" rel="stylesheet" type="text/css">

    <title>Home</title>
    <style>
      body{
      background-color:#F9F9F9;
      font-family: 'poppins';
      }
    </style>
  </head>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  <body>

 
<!-- navbar code begins-->
    
   <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light shadow fixed-top shift animate__animated animate__slideInDown animate__slower">
    <div class="container-fluid">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="home.html" class="navbar-brand"> 
        <img src="LOGOM.jpg "width="80" height="60" alt="" class="d-inline-block align-middle mr-2">
      </a>
  
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto navbar-nav mx-auto">
          <li class="nav-item active navbar-center">
            <a class="nav-link" aria-current="page" href="home.php">HOME</a>
          </li>
          <li class="nav-item navbar-center">
            <a class="nav-link" aria-current="page" href="#aboutus">ABOUT</a>
          </li>
            <li class="nav-item dropdown navbar-center">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              INTEREST
            </a> 
            <ul class="dropdown-menu" aria-labelledby="navbarDropdow n">
              <li><a class="dropdown-item" href="books.html" target="blank">BOOKS</a></li>
              <li><a class="dropdown-item" href="music gallery\songs.html" target="blank">SONGS</a></li>
              <li><a class="dropdown-item" href="podcast\podcast.html" target="blank">PODCAST</a></li>
              <li><a class="dropdown-item" href="moviezip\movie.html" target="blank">MOVIES</a></li>
            </ul>
          </li>
          <li class="nav-item navbar-center">
            <a class="nav-link" href="#read">REVIEWS</a>
          </li>
          <li class="nav-item navbar-center">
            <a class="nav-link" href="p2.html">PROFILE</a>
          </li>
          <li class="nav-item navbar-center">
            <a class="nav-link" href="logout.php">LOGOUT</a>
          </li>
          <li class="nav-item navbar center">
         <!-- <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_L7c2wATpVbK5SL" async> </script> </form> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- navbar code ends -->
 <!-- crousel-->
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width:100%; height:550px;"src="https://variety.com/wp-content/uploads/2022/12/100-Greatest-Movies-Variety.jpg?w=1360&h=765&crop=1" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="width:auto; height:550px;"src="https://media.timeout.com/images/105881167/750/422/image.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="width:auto; height:550px;"src="https://wallpapers.com/images/hd/brown-and-cream-collage-pinterest-laptop-v9n15uoea6ftridt.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 <!-- crousel end -->
 <br><br><br><br><br><br>
  <!-- mood form-->
  <!-- <div class="container">
    <div class="row">

        <div class="col-sm-12">
            <form class="moodform">
                <label for="mood"><h3>How are you feeling today?</h3></label><br><br>
                <input type="text" name="mood" placeholder="HIGH/LOW" required><br><br><br><br>
                <label for="uplift"><h4>Choose your preference</h4></label><br><br>
                <input type="text" name="uplift" placeholder="BOOKS/MOVIES/SONGS/PODCAST" required>
                <br><br><br>
                <button type="submit" class="btn" id="submit-btn">POST</button>
            </form>
        </div>
    </div>
  </div>
  <br><br><br><br><br><br><br> -->
  <!-- end of mood form-->

   <!-- mood form-->
   <div class="container">
    <div class="row">

        <div class="col-sm-12">
            <form class="moodform" action="content.php" method="POST" target="blank">
                <label for="mood"><h3>How are you feeling today?</h3></label><br><br>

                <input type="text" name="mood" placeholder="HIGH/LOW" required autocomplete="off"><br><br><br><br>
                <label for="uplift"><h4>Choose your preference</h4></label><br><br>
                <input type="text" name="category" placeholder="BOOKS/MOVIES/SONGS/PODCAST" required autocomplete="off">
                <br><br><br>
                <button type="submit" name="mood_submit" class="btn" id="submit-btn">POST</button>
                <?php
                //  get_unique_category();
                ?>
            </form>
        </div>
    </div>
  </div>
  <br><br><br><br><br><br><br>
  <!-- end of mood form-->


  <!--about section-->
  <div class="container" id="aboutus">
  <h2><u>ABOUT</u></h2>
  </div>
  <div class="container">
  <div class="row">
    <div class="col -sm -6">
      <img style="width:450px; height:350px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJPjD-ZZ_IpUI_R43zwb6V9Q0LH1vL4b1tjA&usqp=CAU">
    </div>

    <div class="col-sm-6">
      
  <p style="color:black"> Moodify is founded by Navneet Kaur, Bhawana and Shweta in 2023.<br>It is a user-friendly website and 
    is designed primarily for the users need <br>and mood. Your happiness is our ultimate goal and for that we have <br>
    number of movies, chill vibing songs and an interesting podcast for<br> you to listen, experience and uplift your mood.
    Moodify is all about<br> live, laugh and love. Enjoy every moment of your life to it's fullest.As <br>there is no greater gift
    than the gift of life. So appreciate it and live<br> for the moments that matter. Moodify is your constant partner.<br>
    <br><br><b><i>The most courageous decision that you can make each day is to be<br>in a good mood.<br><br>&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Volatire</i></b></p>
    </div>
</div> 
</div><br><br><br><br><br>
 <!-- end of about section -->

<!-- FAQ -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2><u>FAQs</u></h2><br>
    </div>
  </div>
</div>
<div class=" container accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button style="color:#C58940;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      What is Moodify?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Moodify is your partner which can uplift your any type of mood anytime and anywhere. </div>
    </div>
  </div>
  <br>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button  style="color:#C58940;"class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        How to access any content on Moodify?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Moodify is a user-friednly app and everybody can access and enjoy unlimited content.<br><b> For better experience become a premium member at just Rs299 per month.</b></div>
    </div>
  </div>
  <br>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button style="color:#C58940;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      What type of content is available on Moodify?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Exciting, adventoruous, thriller movies, mysterious, motivating  books, motivational podcast from the best speakers and chill vibing songs all are available on your one and only platform <b>MOODIFY.</b></div>
    </div>
  </div>
</div>
<br><br><br><br>
<!-- end of FAQ-->
 

<!-- review form-->
  <div class="container problem">
    <div class="review">
    <a href="feedback.php"><button class="btn1">GIVE FEEDBACK</button></a>
     <div class="row">
      <div class="col-sm-6">
        <img style="width:auto; height:400px; object-fit: contain;" src="https://thumbs.dreamstime.com/b/postcard-note-paper-notebook-pen-cup-tea-wooden-brown-background-can-use-to-write-something-sending-107469313.jpg">
             </div>
    </div>
    </div>
  </div>
    </div>
  </div>
  </div>
</div><br><br><br><br>
  <!-- end of review form -->

  <div class="container reviews" id="read">
    <div class="row">
      <div class="col-sm-12">
        <h2><u>REVIEWS</u></h2></div><br><br><br>
      <div class="col-sm-12">
       <?php echo $deleteMsg??''; ?>
       <div class="table-responsive">
         <table class="table">
          
       <tbody>
     <?php
         if(is_array($fetchData)){      
         $sn=1;
         foreach($fetchData as $data){
       ?>
         <tr>
         <td style="padding-top:20px;border:none;color:black;"class="first"><?php echo $data['name']??''; ?></td></tr>

        <tr>
         <td style="padding-bottom:60px;border-bottom:1px solid #C58940;color:black;" class="second"><?php echo $data['description']??''; ?></td>  
        </tr>

        <?php
         $sn++;}}else{ ?>
         <tr>
           <td class="fourth" colspan="8">
       <?php echo $fetchData; ?>
     </td>
       <tr>
       <?php
       }?>
       </tbody>
        </table>
      </div>
   </div>
   </div>
   </div>
   <br><br>
  <!-- main-footer -->
<footer class="main-footer">
  <div class="container">
      <div class="widget-section">
          <div class="row">
              <div class="col-lg-4 footer-column">
                  <div class="logo-widget footer-widget">
                      <div class="widget-content">
                          <h4 class="widget-title">Stay Connected On Social</h4>
                          <ul class="social-links">
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-lg-8 footer-column">
                  <div class="contact-widget footer-widget">
                      <h4 class="widget-title">Contact us</h4>
                      <div class="widget-content">
                          <ul class="list">
                              <li>
                                  <span>Address :</span>
                                  &bull; Delhi &nbsp; &bull; Noida &nbsp; &bull; Gurugaon
                              </li>
                              <li>
                                  <span>Call Us :</span>
                                  <a href="tel:8523461256">8523461256</a>
                              </li>
                              <li>
                                  <span>Email :</span>
                                  <a href="mailto:moods@moodify.in">moodify@gmail.com</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom centred">
          <div class="copyright">&copy; <a href="#">Moodify</a> 2023. All Rights Reserved. </div>
      </div>
  </div>
</footer>
<!-- main-footer end -->

</body>
</html>
 