<?php

$servername="localhost";
$username="root";
$password="";
$dbname="moodify";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
     die("Connection failed: "
        . $conn->connect_error);
}
$name=" ";
$email=" ";
$description=" ";


$name=$_POST["name"];
$email=$_POST["email"];
$description=$_POST["description"];

$sql = "INSERT INTO review (name,email,description) VALUES ('$name','$email','$description')";

$result=$conn->query($sql);
if($result===true)
{
    header("location: ./home.php");
}
else
{
    echo  "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>