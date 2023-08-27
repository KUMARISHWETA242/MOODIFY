<?php
// including connect files
  include("./includes/connect.php");

  //getting content

  function getcontent(){
            global $con;
             if(!isset($_POST['mood_submit'])){
              if(!isset($_POST['category'])){
                 if(!isset($_POST['mood'])){
                 
            $select_query="select * from `content` order by rand()";
              $result_query=mysqli_query($con,$select_query);
              // $row=mysqli_fetch_assoc($result_query);
              // echo $row['content_title'];
              while($row=mysqli_fetch_assoc($result_query)){
                $content_id=$row['content_id'];
                $content_title=$row['content_title'];
                $content_description=$row['content_description'];
                $category_id=$row['category_id'];
                $mood_id=$row['mood_id'];
                $content_image1=$row['content_image1'];
                $content_image2=$row['content_image2'];
                // $content_image3=$row['content_image3'];

               echo "<div class='col-md-3 mb-2'>
                        <div class='card' style='width: 18rem;'>
                            <img  class='card-img-top' src='./admin_area/content_images/$content_image1'  >
                                <div class='card-body'>
                                   <h5 class='card-title'>$content_title</h5>
                                    <p class='card-text'>$content_description</p>
                                    <!-- <a href='#' class='btn btn-primary'>Play</a> -->

                                </div>
                        </div>
                      </div> ";
              }

             } 
         }   
        } 
  }

  //getting unique categories
  function get_unique_category(){
    global $con;
     if(isset($_POST['mood_submit'])){
     if(isset($_POST['category'])){
      if(isset($_POST['mood'])){
        $search=strtoupper($_POST['category']);
        echo "<div class='search'> Search result for $search....</div>";
        $category_title =$_POST['category'];
        $mood_title =$_POST['mood'];
        // $select_query="select * from `content`  where  category_id='$category_title'";
        $select_query="select * from `content`  where  LOWER(category_id) LIKE LOWER('$category_title%') AND  LOWER(mood_id) LIKE LOWER('$mood_title%') order by rand()" ;
        $result_query=mysqli_query($con,$select_query);
      // $row=mysqli_fetch_assoc($result_query);
      // echo $row['content_title'];
      while($row=mysqli_fetch_assoc($result_query)){
        $content_id=$row['content_id'];
        $content_title=$row['content_title'];
        $content_description=$row['content_description'];
        $category_id=$row['category_id'];
        $mood_id=$row['mood_id'];
        $content_image1=$row['content_image1'];
        $content_image2=$row['content_image2'];

        if($search=='MOVIE'||$search=='MOVIES'){

        echo "<div class='col-md-3 mb-2'>
        <div class='card' style='width: 18rem;'>
              <video width='100%' controls  class='card-img-top' poster ='./admin_area/content_images/$content_image2'>
                   <source src='./admin_area/content_images/$content_image1' type='video/webm' >
               </video>
                <div class='card-body'>
                   <h5 class='card-title'>$content_title</h5>
                    <p class='card-text'>$content_description</p>

                </div>
        </div>
        </div> ";
        }
        else if($search=='PODCAST'||$search=='PODCASTS'){
          echo "<div class='col-md-3 mb-2'>
          <div class='card' style='width: 20rem;'>
              <img  class='card-img-top' src='./admin_area/content_images/$content_image1'  >
                  <div class='card-body'>
                    <audio controls width='100%' >
                     <source src='./admin_area/content_images/$content_image2' type='audio/mp3'>
                     </audio>
                     <h5 class='card-title'>$content_title</h5>
                     <p class='card-text'>$content_description</p>
 
                  </div>
          </div>
        </div> ";


        }
        else if($search=='BOOK'||$search=='BOOKS'){
          echo "<div class='col-md-3 mb-2'>
          <div class='card' style='width: 18rem;'>
              <img  class='card-img-top' src='./admin_area/content_images/$content_image1'  >
                  <div class='card-body'>
                     <h5 class='card-title'>$content_title</h5>
                      <p class='card-text'>$content_description</p>
                      <a href='./admin_area/content_images/$content_image2' target='blank' class='btn btn-primary'>Read Now</a>

                  </div>
          </div>
        </div> ";

        }
        else if($search=='SONG'||$search=='SONGS'){
          echo "<div class='col-md-3 mb-2'>
          <div class='card' style='width: 20rem;'>
              <img  class='card-img-top' src='./admin_area/content_images/$content_image1'  >
                  <div class='card-body'>
                    <audio controls width='100%' >
                     <source src='./admin_area/content_images/$content_image2' type='audio/mp3'>
                     </audio>
                     <h5 class='card-title'>$content_title</h5>
                     <p class='card-text'>$content_description</p>
 
                  </div>
          </div>
        </div> ";


        }
        else {

          echo "<div class='col-md-3 mb-2'>
                        <div class='card' style='width: 18rem;'>
                            <img  class='card-img-top' src='./admin_area/content_images/$content_image1'  >
                                <div class='card-body'>
                                   <h5 class='card-title'>$content_title</h5>
                                    <p class='card-text'>$content_description</p>
                                    <!-- <a href='#' class='btn btn-primary'>Play</a> -->

                                </div>
                        </div>
                      </div> ";

        }
         
        }

     }   
    }
} 
}


  
  //displaying mood in form

  function getmood(){
    global $con;
    $select_mood="Select * from `mood`";
    $result_mood=mysqli_query($con,$select_mood);
   while($row_data=mysqli_fetch_assoc($result_mood))
    {   
      $mood_title=$row_data['mood_title'];
      $mood_id=$row_data['mood_id'];
      echo "<option values='$mood_title'><a href='home.php?category=$mood_title'>$mood_title</a></option>";
    }

  }

//   displaying category in form

function getcategory(){
               global $con;
                $select_cat="Select * from `categories`";
                $result_cat=mysqli_query($con,$select_cat);
                while($row_data=mysqli_fetch_assoc($result_cat))
                {   
                  $category_title=$row_data['category_title'];
                  $category_id=$row_data['category_id'];
                  echo "<option values='$category_title'><a href='home.php?category=$category_title'>$category_title</a></option>";
                }
}
?>