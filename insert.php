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
$username=" ";
$gender=" ";
$email=" ";
$age=" ";
$pass=" ";


$username=$_POST["username"];
$email=$_POST["email"];
$pass=$_POST["pass"];

$sql = "INSERT INTO signup (username,email,pass) VALUES ('$username','$email','$pass')";

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