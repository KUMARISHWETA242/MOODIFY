<?php 
  include("../includes/connect.php");
  if(isset($_POST['insert_content'])){
    $content_title=$_POST['content_title'];
    $content_description=$_POST['content_description'];
    $category=$_POST['category'];
    $mood=$_POST['mood'];
    //accessing images
    $content_image1=$_FILES['content_image1']['name'];
    $content_image2=$_FILES['content_image2']['name'];
    //aacessing image temp name
    $temp_image1=$_FILES['content_image1']['tmp_name'];
    $temp_image2=$_FILES['content_image2']['tmp_name'];

    //checking empty condition
    if($content_title=='' or $content_description==''  or $category=='' or $mood=='' or
     $content_image1=='' or $content_image2==''){
        echo "<script>alert('please fill all the available fields')</script>";
        exit();
    }else{
        move_uploaded_file( $temp_image1,"./content_images/$content_image1");
        move_uploaded_file( $temp_image2,"./content_images/$content_image2");

        //insert_content
        $insert_content="insert into `content` (content_title, content_description, 
        category_id,mood_id,content_image1,content_image2) values ('$content_title','$content_description','$category','$mood','$content_image1','$content_image2')";

        $result_query=mysqli_query($con,$insert_content);
        if($result_query){
            echo "<script>alert ('successfully inserted the content')</script>";
        }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert content-admin dashboard</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="admin.css">
    <!--FONT AWESOME LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        body{
        backgound-color:burlywood !important;
        }
    </style>

</head>
<body style="backgound-color:burlywood;">
    <div class="container mt-3">
        <h1 class="text-center">Insert content</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="content_title" class="form-label">content title</label>
                <input type="text" name="content_title"
                id="content_title" class="form-control" 
                placeholder="enter content title" autocomplete="off"
                required="required">
            </div>
        <!-- description -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="content_description" class="form-label">content description</label>
            <input type="text" name="content_description"
            id="content_description" class="form-control" 
            placeholder="enter content description" autocomplete="off"
            required="required">
        </div>
        <!-- category-->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="category" id="" class="form-select">
                <option values="">select a category</option>
                <?php
                    $select_query="select * from `categories`";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo "<option values= \"".$row['category_id']."\">".$row['category_title']."</option>";
                    }
                ?>
                

            </select>
        </div>
        <!--mood-->
        <div class="form-outline mb-4 w-50 m-auto">
        <select name="mood" id="" class="form-select">
                <option values="">enter mood</option>
                <?php
                    $select_query="select * from `mood`";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $mood_title=$row['mood_title'];
                        $moood_id=$row['mood_id'];
                        echo "<option values=\"".$row['mood_id']."\">".$row['mood_title']."</option>";
                    }
                ?>
        </select>
        </div>
        <!-- image1 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="content_image1" class="form-label">image1</label>
            <input type="file" name="content_image1"
            id="content_image1" class="form-control" 
            required="required">

        </div>
        <!-- image2 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="content_image2" class="form-label">image2</label>
            <input type="file" name="content_image2"
            id="content_image2" class="form-control" 
            required="required">
        </div>
        <!-- submit button -->
        <div class="form-outline mb-4 w-50 m-auto">
            <input style="background-color:#c58940;"type="submit" name="insert_content" class="btn btn-info mb-3 px-3" value="Insert Content">
        </div>
    </form>
    </div>
    
</body>
</html>