<?php 
    $host="localhost";
    $user="root";
    $password="";
    $db="login";
    $table = "login_details";

    $mysql = mysqli_connect($host,$user,$password,$db);
    if (!$mysql) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['uname'])){
        
        $uname=$_POST['uname'];
        $password=$_POST['password'];
        
        $sql="select * from login_details where userName='".$uname."'AND password='".$password."'";
        
        $result=mysqli_query($mysql,$sql);
        echo "hello";
        if(mysqli_num_rows($result)==1){
            echo " You Have Successfully Logged in";
            header("Location: index.php?uname=$uname");
            exit();
        }
        else{
            echo " You Have Entered Incorrect Password";
            header("Location: login.php?msg=Login_Failed");
            exit();
        }
            
    }
?>