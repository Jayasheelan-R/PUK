<html>
    <head>
    <title>MS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel = "icon" href ="multi.png"  type = "image/x-icon">
        <link rel="stylesheet" href="stylesheet.css" type="text/css">
    </head>
    <body>
        <nav class="nav-bar">
            <ul class="nav-whole">
                <a class="navbar-brand" href="#"><img src="multi.png" width="50" class="d-inline-block align-top" alt="" style="float: left;"></a>
                <li class="nav-butn"  style="font-size: 25px;">multitude services</li>
            </ul>
        </nav>
        <nav class="nav-barr">
          <a href="home.php"><li class="nav-but">Home</li></a>
                <a href="services.php" active><li class="nav-but">Services</li></a>
                <a href="about.html" active><li class="nav-but">About</li></a>
                <a href="login.php"><li class="nav-but" style="float: right;">Logout</li> </a>
                <a href="profile.php"><li class="nav-but" style="float: right;">Profile</li></a>
        </nav>
        <br><center>
        <form method="GET" action="">
          <select onchange="myFunction()" name ="work" id="work" style='position: auto;overflow: hidden;top: 170px;left:10px;align-items: center;z-index: 100;height:60px;width: 40%;border: 4px solid rgb(0, 0, 0);'>
            <option value="carpenter"style="font-size:18px;" >carpentry</option>
            <li class="divider"></li>
            <option value="plumber" style="font-size:18px;" >plumbing</option>
            <li class="divider"></li>
            <option value="electrician" style="font-size:18px;">electrical</option>
            <li class="divider"></li>
            <option value="painter" style="font-size:18px;">painting</option>
            <li class="divider"></li>
            <option value="maintenance" style="font-size:18px;">cleaning</option>
            <li class="divider"></li>
          </select> 
          <input type="submit" style="width:20%;font-family:Impact;font-size:20px;" value="Fetch">
        </form>
</center>
<center><div class = 'ser'>
          <?php
            if(isset($_GET['work'])){
              $q = $_GET['work'];

              $con = mysqli_connect('localhost','root','','login');
              if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
              }
              $sql="SELECT * FROM workers WHERE occupation = '$q';";
              
              $run = mysqli_query($con, $sql);
              echo "";
 
              while($row = mysqli_fetch_array($run,MYSQLI_ASSOC)) {
              
                echo "<div style='font-family:Impact;font-size:20px;float:left;left:10px;margin-right:10px;'>".$row['name']."</div>";
                echo "<div style='font-family:Impact;font-size:20px;float:left;left:10px;margin-right:10px;'>".$row['occupation']."</div>";
                echo "<div style='font-family:Impact;font-size:20px;float:left;left:10px;margin-right:10px;'>&#8377;&nbsp;".$row['wage']."</div>";
                echo "<div style='font-family:Impact;font-size:20px;float:left;left:10px;margin-right:10px;'>".$row['service_location']."</div>";
              
            }
            echo "";
              mysqli_close($con);}
            ?>
            <input type=submit value="Add" style="width:15%;font-family:Impact;font-size:20px;background:black;float:right;">
            </div></center>
            
        <footer class="footer" style="margin-top:500px;">
        <center class="findus">Find Us on Social Media</center><br>
        <section>
            
            <ul class="icon-list">
              <li class="icon-item">
                <a href="#" class="icon-link"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="icon-item">
                <a href="#" class="icon-link"><i class="fa fa-facebook-f"></i></a>
              </li>
              <li class="icon-item">
                <a href="#" class="icon-link"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="icon-item">
                <a href="#" class="icon-link"><i class="fa fa-youtube"></i></a>
              </li>
              <li class="icon-item">
                <a href="#" class="icon-link"><i class="fa fa-linkedin"></i></a>
              </li>    
            </ul>
          </section></footer>
          
    </body>
</html>