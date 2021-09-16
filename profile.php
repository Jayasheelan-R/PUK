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
                <a href="services.php"><li class="nav-but">Services</li></a>
                <a href="about.html"><li class="nav-but">About</li></a>
                <a href="login.php"><li class="nav-but" style="float: right;">Logout</li> </a>
        </nav>
        <br>
        <center>
        <h1 class="welcome" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;letter-spacing: 0.15em;">User Profile</h1><br>
      
          <div >
          <form action="lol.php" method="POST">
            <br>
            <div><label >Name</label>
              <input type="text" id="name" name="name" required=""/>
  
                <label>Email</label>
              <input type="text" id="email" name="email" required=""/>
           
            <label>Phone no</label>	
              <input type="text" id="phone" name="phone" required=""/>
      
            <label >Address</label>	
              <input type="text" id="address" name="address" required=""/>
           
            
           <label >Landmark</label>	
              <input type="text" id="landmark" name="landmark" required=""/>
      
          <input id = 'submit' type="submit" style="font-size: medium;background-color: rgb(118, 89, 197);float: right;height: 40px;border-radius: 10px;" value="Save">
          </form></center>
          <br><br>
            <footer class="footer">
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