<?php

$host="localhost";
    $user="root";
    $password="";
    $db="login";
    $table = "login_detail";
    $mysql = mysqli_connect($host,$user,$password,$db);
    if (!$mysql) {
        die("Connection failed: "+mysqli_connect_error());
    }
    if(isset($_POST['name']) && !isset($_POST['wage'])){
        $uname=$_POST['uname'];
        $password=$_POST['password'];
        $sql="insert into login_detail values('".$uname."','".$password."');";
        mysqli_query($mysql,$sql);
        header("Location: home.php?uname=$uname");
    }
    elseif(isset($_POST['fname'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $addres = $_POST['address'];
        $desc = $_POST['Description'];
        $sql="insert into enquiry values('".$fname."','".$lname."','".$email."','".$addres."','".$desc."');";
        mysqli_query($mysql,$sql);
        header("Location: home.php?name=$fname");
    }
    elseif(isset($_POST['wage'])){
        $name = $_POST['name'];
        $wage = $_POST['wage'];
        $occupation = $_POST['occupation'];
        $location = $_POST['location'];
        $db  = "login";
        $table = "workers"; 
        $mysql = mysqli_connect($host,$user,$password,$db);
        $sql="insert into $table values('".$name."','".$occupation."','".$wage."','".$location."');";
        mysqli_query($mysql,$sql);
        header("Location: home.php");
    }
    else{
        header("Location: login.php");
    }
   ?>
   