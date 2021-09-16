<html>
    <head>
    <title>MS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel = "icon" href ="multi.png"  type = "image/x-icon">
        <link rel="stylesheet" href="stylesheet.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    </head>

    <body ng-app="" ng-style="style">
        <nav class="nav-bar">
            <ul class="nav-whole" >
            <a class="navbar-brand" href="#"><img src="multi.png" width="50" class="d-inline-block align-top" alt="" style="float: left;"></a>
            <span>
            <spam style="float:right;margin-right:15px;" ng-style="lol" ng-click="style={backgroundColor:'rgb(10,40,50)'};lol={display:'none'};loll={display:'unset'}" ><img src="dark.png" width="40" class="d-inline-block align-top" alt="" style="float: right;margin-right:30px;">
</spam></span>
<span>
<spam  style="display:none;float:right;margin-right:15px;" ng-style="loll" ng-click="style={backgroundColor:''};loll={display:'none'};lol={display:'unset'}"><img src="light.png" width="40" class="d-inline-block align-top" alt="" style="float: right;margin-right:30px;">
</spam><span>
<li class="nav-butn"  style="font-size: 25px;">multitude services</li>             
                <span ng-app=""  >   
            </ul>
        </nav>
        <?php
        session_start();
        $_SESSION["name"] = "Login";
        ?>
        <nav class="nav-barr">
          <a href="home.php"><li class="nav-but">Home</li></a>
                <a href="services.php"><li class="nav-but">Services</li></a>
                <a href="about.html"><li class="nav-but">About</li></a>
                <?php if(isset($_GET['name'])): ?>
                <a href="login.php"><li class="nav-but" style="float: right;">logout </li> </a>
                <?php endif; ?>
                <a href="login.php"><li class="nav-but" style="float: right;"><?php
                if($_SESSION["name"]){
                  echo $_SESSION["name"];
                } 
                else{
                  echo "login";
                  }
                ?></li></a>
        </nav>
        <br>
        <?php if(isset($_SESSION["name"])){ ?>
          <div style="width:100%lheight:50%;background-color: lightseagreen;font-family:Impact">
            <h1>Hello ! <?php echo $_SESSION["name"] ?></h1>
          </div>
        <?php }
        else{
          echo "Login to Continue";
        } ?>
        <br>
        <center>
          <h1 style="color: rgb(255, 255, 255);font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;letter-spacing: 0.15em;">OUR SERVICES</h1><br>
        <img class="lol" src="hammer.png">
        <img class="lol" src="spanner.png">
        <img class="lol" src="screw-driver.png">
        <img class="lol" src="paint.png">
        <img class="lol" src="wire-cutter.png"><br>
      </center>
         <br><br>
        <img src="4.jpg" style="width: 100%;">
        <footer class="footer">
        <center class="findus">Find Us on Social Media</center><br>
        <section>
            
            <ul class="icon-list">
              <li class="icon-item">
                <a href="" class="icon-link"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="icon-item">
                <a href="" class="icon-link"><i class="fa fa-facebook-f"></i></a>
              </li>
              <li class="icon-item">
                <a href="" class="icon-link"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="icon-item">
                <a href="" class="icon-link"><i class="fa fa-youtube"></i></a>
              </li>
              <li class="icon-item">
                <a href="" class="icon-link"><i class="fa fa-linkedin"></i></a>
              </li>    
            </ul>
          </section></footer>

    </body>
</html>