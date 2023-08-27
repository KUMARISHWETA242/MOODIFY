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

if (isset($_POST['username']) && isset($_POST['pass'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['username']);

    $pass = validate($_POST['pass']);

    if (empty($username)) {

        header("Location: loginSign.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: loginSign.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM signup WHERE username='$username' AND pass='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['pass'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: loginSign.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: LoginSign.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: home.html");

    exit();

}