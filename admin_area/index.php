<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="admin.css">
    <!--FONT AWESOME LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="homeStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <style>
        body{
            backgound-color:#c58940;;
        }
        admin{
            margin-left:20px;
        }
        .navbar{
            backgound-color:#c58940;
        }
        </style>
</head>

<body>
    
<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light shadow fixed-top shift animate__animated animate__slideInDown animate__slower">
    <div class="container-fluid">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="home.html" class="navbar-brand"> 
        <img src="../images/book.jpg"width="80" height="60" alt="" class="d-inline-block align-middle mr-2">
      </a>
  
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto navbar-nav mx-auto">
          <li class="nav-item active navbar-center">
            <a class="nav-link" aria-current="page" href="login.php"></a>
          </li>
</nav>
<br><br><br><br><br>
    <!--end of manage discription -->

    <!-- manage section -->

    <div class="row" >
        <div class="col-md-12 p-2 d-flex align-items-center admin">
            <div class="button text-center ">
                <button class="my-3"><a href="insert_content.php" class="nav-link  my-1" >Insert Content</a></button>
                <button><a href="index.php?insert_categories" class="nav-link  my-1" >Insert Category</a></button>
                <button><a href="index.php?insert_mood" class="nav-link   my-1" >Insert Mood</a></button>
            </div>
        </div>
    </div>


    <!--end of  manage section -->

    <!-- insert category -->
      <div class="container my-3">
        <?php
        if(isset($_GET['insert_categories']))
        {
            include("insert_categories.php");
        }
        if(isset($_GET['insert_mood']))
        {
            include("insert_mood.php");
        }

        ?>

      </div>

    <!-- end of insert category -->
</body>
</html>