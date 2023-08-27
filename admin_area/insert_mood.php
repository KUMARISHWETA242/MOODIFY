<?php 
  include("../includes/connect.php");
  if(isset($_POST['insert_mood'])){
    $mood_title=$_POST['mood_title'];

    //select from databses
    $select_query="Select *from `mood` where mood_title='$mood_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script> alert('Mood is already inserted ')</script>";
    }
    else{
    $insert_query="insert into `mood` (mood_title) values ('$mood_title')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script> alert('mood inserted')</script>";
    }
  }
}
?>


<h2 class="text-center">Insert Mood</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text " style="color:#e79531" id="basic-addon1"><i class="fa-solid fa-reciept"></i></span>
  <input type="text" class="form-control" name="mood_title" placeholder="Insert mood" aria-label="mood" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2">
    <input type="submit" class=" p-3 my-3 border-0" style="color:#e79531" name="insert_mood" value="Insert_mood" >
     <!-- <button class="bg-info p-3 my-3 border-0"> Insert Mood</button> -->
</div>


</form>

