
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.css">
  
    
    <link rel="stylesheet" href="homeStyle.css">
    <link rel="stylesheet" href="feedback.css">
    <link rel="stylesheet" href="nav.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--FONT AWESOME LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <title>Home</title>
    <style>
      body{
      background-color:#FFF9F9;
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
  <script>
     var logID = 'log',
  log = $('<div id="'+logID+'"></div>');
$('body').append(log);
  $('[type*="radio"]').change(function () {
    var me = $(this);
    log.html(me.attr('value'));
  });
    </script>

 
    
   <!-- navbar code begins -->
    
   <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light shadow fixed-top shift animate__animated animate__slideInDown animate__slower">
    <div class="container-fluid">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="home.html" class="navbar-brand"> 
        <img src="images/logo.JPG" width="80" height="60" alt="" class="d-inline-block align-middle mr-2">
      </a>
  
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto navbar-nav mx-auto">
          <li class="nav-item navbar-center">
            <a class="nav-link" aria-current="page" href="home.php">HOME</a>
          </li>
          <li class="nav-item navbar-center">
            <a class="nav-link" aria-current="page" href="home.php">ABOUT</a>
          </li>
            <li class="nav-item dropdown navbar-center">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              INTEREST
            </a> 
            <ul class="dropdown-menu" aria-labelledby="navbarDropdow n">
              <li><a class="dropdown-item" href="books.html">BOOKS</a></li>
              <li><a class="dropdown-item" href="music gallery\songs.html">SONGS</a></li>
              <li><a class="dropdown-item" href="podcast\podcast.html">PODCAST</a></li>
              <li><a class="dropdown-item" href="moviezip\movie.html">MOVIES</a></li>
            </ul>
          </li>
          <li class="nav-item active navbar-center">
            <a class="nav-link" href="home.php">REVIEWS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- navbar code ends -->

<div class="container review">
    <div class="row">
         <div class="col-sm-12">
        <form class="myfeedback"action="reviews.php" method="POST">
          <div class="star-widget">
            <input type="radio" name="rate" id="rate-5">
            <label for="rate-5" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-4">
            <label for="rate-4" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3">
            <label for="rate-3" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2">
            <label for="rate-2" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1">
            <label for="rate-1" class="fas fa-star"></label>
            <br><br>
        </div>
        <br>
          <input type="text" name="name" placeholder="Enter your name"required autocomplete="off"><br><br>
          <input type="email" name="email" placeholder="Enter your email" required autocomplete="off"><br><br>
          <textarea cols="61" rows="5" name="description" placeholder="Describe your experience.."></textarea><br><br>
          <button style="margin:0;"type="submit" class="btn" id="submit-btn">POST</button>
        </form>
      </div>
      </div>
      </div>
      <br><br>

      <script>
        const btn = document.querySelector("button");
        const post = document.querySelector(".post");
        const widget = document.querySelector(".star-widget");
        const editBtn = document.querySelector(".edit");
        btn.onclick = ()=>{
          widget.style.display = "none";
          post.style.display = "block";
          editBtn.onclick = ()=>{
            widget.style.display = "block";
            post.style.display = "none";
          }
          return false;
        }
      </script>
  
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
                                  <a href="mailto:moods@moodify.in">moods@moodify.in</a>
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