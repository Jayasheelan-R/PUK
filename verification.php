<?php
        session_start();
        ?>
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
	if(isset($_POST['uname']) && isset($_POST['password'])){
		
		$uname=$_POST['uname'];
		$password=$_POST['password'];
		$sql="select * from login_detail where userName='$uname' and password='$password';";
        $query = mysqli_query($mysql,$sql);
		echo mysqli_num_rows($query);
		if(mysqli_num_rows($query)>=1){
        header("Location: home.php?name=$uname");
		$_SESSION["name"] = $uname;
		}
	
		else{
            $err = "Password or username incorrect";
			header("Location: login.php?error=$err");
		}
	}	
	else{
		$err = "Enter Password and username";
			header("Location: login.php?error=$err");
	}
?>