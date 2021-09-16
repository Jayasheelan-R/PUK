<?php

$host="localhost";
	$user="root";
	$password="";
	$db="login";
	$table = "user";

	$mysql = mysqli_connect($host,$user,$password,$db);
	if (!$mysql) {
		die("Connection failed: "+mysqli_connect_error());
	}
    if(isset($_POST['name'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pno=$_POST['phone'];
        $adr=$_POST['address'];
        $lm=$_POST['landmark'];
        $sql="INSERT INTO $table(name,email,phno,addr,address,landmark) VALUES ('".$name."','".$email."','".$pno."','".$adr."','".$dr."','".$lm."')";
        mysqli_query($mysql,$sql);
        header("Location: home.php?name=$name");
    }
?>