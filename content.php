<!-- connect files -->

<?php 

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
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--FONT AWESOME LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./homeStyle.css">
    <!-- <link rel="stylesheet"  href="./content.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <title>Content</title>
    <style>
      body{
        background-color:#ebcfac;
      }
      
      .card{
          border-radius:10px;
          transition: all 0.3s ease;
          margin-bottom:10px;
      }
      .card:hover{
        transform:scale(1.15);
      }
      .card-img-top{
        width:100%;
        height:280px;
        object-fit:cover;
      }
      .card-title .card-text{
        text-align:center;
      }

      .card-text{
        color:grey;
      }
      .search{
        font-size:20px;
        margin-bottom:8px;
      }

      .card-body audio{
        margin-left:0px;
        padding-left:0px;
      }
/* navbar styling starts */
#mainNavbar{
    font-size: 0.8rem;
    font-family:poppins;
    background-color: #F9F9F9;
    opacity: 80%;
    padding: 0px;
    margin: 0px;
    align-items: center;
}


/* for styling navbar brand text */
#mainNavbar .navbar-brand{
    color: black;
    font-size: 30px;
    letter-spacing: 1px;
    text-align: center;
}
/* for setting font size of links large */
#mainNavbar .nav-link{
    font-size: large;
    color: black;
    font-weight: 500;
    position: relative;
    justify-content: center;
    align-items: center;
    height: 40px;
  line-height: 43px;
  margin: 0px;
  padding: 0px 22px;
  display: flex;
  float:none;
 

}
/* for styling active link of navbar */
#mainNavbar .navbar-nav .active .nav-link{
    color: white;
    background-color:#C58940;
}

/* for showing color when hovered over nav-link items */
#mainNavbar .navbar-nav .nav-link:hover{
    color: white;
}
#mainNavbar .navbar-nav .nav-link{
    position: relative;
}

nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .8s;
}

/* SHIFT */
nav.shift ul li a {
    position:relative;
    z-index: 1;
  }
  nav.shift ul li a:hover {
    color: white;
  }
  nav.shift ul li a:after {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    width: 100%;
    height: 1px;
    content: '.';
    color: transparent;
    background:#C58940;
    visibility: none;
    opacity: 0;
    z-index: -1;
  }
  nav.shift ul li a:hover:after {
    opacity: 1;
    visibility: visible;
    height: 100%;
  }
.navbar-toggler{
    background-color:#C58940;
}
.navbar-toggler .navbar-toggler-icon{
    color:white;
} 

/* navbar styling ends */
       

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
          <!-- <li class="nav-item navbar center">
         <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_L7c2wATpVbK5SL" async> </script> </form>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

<!-- navbar code ends -->

    <!-- content-section -->
    
    <div class="row px-4">
        <div class="col-md-12">
            <div class="row">
            <!-- fechting product -->
            <?php
            getcontent();
            get_unique_category();
           ?>
                
            </div>

        </div>
    </div>

    <!-- End of content-section -->




   <!-- main-footer
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
                                  <a href="tel:8527910123">8527910123</a>
                              </li>
                              <li>
                                  <span>Email :</span>
                                  <a href="mailto:studio@rapidRhythms.in">studio@rapidRhythms.in</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom centred">
          <div class="copyright">&copy; <a href="#">RAPID RHYTHMS DANCE STUDIO</a> 2021. All Rights Reserved. </div>
      </div>
  </div>
</footer> -->
<!-- main-footer end -->

</body>
</html>
 