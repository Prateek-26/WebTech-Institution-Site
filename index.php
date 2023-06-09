<?php
    session_start();
    include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | GOA COLLEGE OF ENGINEERING</title>
    
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/cbe5eee2e7.js" crossorigin="anonymous"></script>
    
    <!-- CSS LINK -->
    <link rel="stylesheet" href="./css/style.css">

    
    <style>
body#LoginForm{ background-image:url("img/bgblur.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}
 
.form-heading { color:#fff; font-size:23px;text-align:center;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}
 
.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}

</style>
</head>
<body id="LoginForm">
    <section class="home-section">
        <header>
            <!-- <span class="header-logos">
            </span> -->
            <div class="header-logos">
              <img src="./css/images/gog.jpeg" alt="GOG">
              <img src="./css/images/gec-logo.webp" alt="GEC">

            </div>
            <span class="header-location flex-row-center">
                <span class="location">
                    <h3>Goa College of Engineering</h3>
                    <h3>Farmagudi, Ponda-Goa, 403401</h3>
                </span>
                <i class="fa-solid fa-location-dot"></i>
            </span>
        </header>
        <div class="home-content">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" id="btn"></span>
                  </button>
                  <div class="collapse navbar-collapse flex-col-center" id="navbarNav">
                    <ul class="navbar-nav">

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php" style="color: #fff; text-shadow: 0 #fff;">Home</a>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Academics
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="./campus.html" style="color: black; text-shadow: 0 0;">Campus</a></li>
                          <li><a class="dropdown-item" href="./Library.html" style="color: black; text-shadow: 0 0;">Library</a></li>
                          <li><a class="dropdown-item" href="./students.html" style="color: black; text-shadow: 0 0;">Students</a></li>
                        </ul>
                      </li>

                      <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                          Administration
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#" style="color: black; text-shadow: 0 0;">Director</a></li><li><a class="dropdown-item" href="#" style="color: black; text-shadow: 0 0;">HODs</a></li><li><a class="dropdown-item" href="#" style="color: black; text-shadow: 0 0;">Key Faculty</a></li>
                        </ul>
                      </li> -->

                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost/WT%20Highway/facultyinfo.php">Faculty</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="./Placements.html">T&P</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#">Activities</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                      </li>
                      <li class="nav-item-login">
                        <button id="login_but">Login</button>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
        <div class="home-content">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./css/images/computer dept.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./css/images/civil dept.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./css/images/etc dept.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./css/images/img2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./css/images/img5.png" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
          <div class="home-about-section">
            <div class="row home-about-grid-container">
                <div class="col-sm-7 home-about-col home-about-left">
                  <div class="home-about">
                    <h1>About GEC</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique deleniti quis magni voluptatum perspiciatis, harum possimus quos, alias omnis doloribus corporis nesciunt voluptate dolor nihil quo, molestias saepe esse delectus!</p>
                    <h3>Our Vision</h3>
                    <p>A TECHNICAL INSTITUTE WITH A FOCUS ON EXCELLENCE IN ACADEMICS, RESEARCH, INDUSTRY COLLABORATION AND NURTURING HUMAN VALUES IN STUDENTS.</p>
                    <h3>Our Mission</h3>
                    <p>1.Formulate & implement curriculum that ensures high academic standards. <br><br>
                      2.Provide infrastructure that meets academic & advanced research requirements. <br><br>
                      3.Collaborate with national, international institutions, laboratories and industries through student and faculty exchange programs and internships. <br><br>
                      4.Undertake consultancy projects that are relevant to the state & nation. <br><br>
                      5.Impart human values, awareness of environment and sustainable solutions in students and faculty. <br><br>
                      6.Nurture innovation, entrepreneurship, leadership & resource management skills.</p>
                  </div>
                </div>
                <div class="col-sm-5 home-about-col home-about-right">
                  <div class="home-about">
                    <h1>Note from Director</h1>
                    <img src="./css/images/meri pic.JPG" alt="">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos animi non quod a aliquid molestias fuga nam tempore dolores magnam?</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, repellendus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, architecto?</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo itaque soluta ipsa dolore est magni voluptate enim dolores officiis aspernatur.</p>
                  </div> 
                </div>
            </div>
          </div>
          <div class="row notice-event-section">


            <div class="col-lg-4 notice notice-event  flex-col-center">
              <div class="notice-event-content flex-col-center notice-content">
                <h3>Notice</h3>
                <ul type="none">
                  <li><marquee behavior="" direction=""><a href="">Bus Schedule | New has been latelty floated</a></marquee></li>
                  <li><marquee behavior="" direction=""><a href="">Bus Schedule | New has been latelty floated</a></marquee></li>
                  <li><marquee behavior="" direction=""><a href="">Bus Schedule | New has been latelty floated</a></marquee></li>
                  <li><marquee behavior="" direction=""><a href="">Bus Schedule | New has been latelty floated</a></marquee></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4 notice notice-event flex-col-center">
              <div class="notice-event-content flex-col-center notice-content">
                <h3>Academics</h3>
                <ul type="none">
                  <li><a href="">Bus Schedule | New has been latelty floated</a></li>
                  <li><a href="">Bus Schedule | New has been latelty floated</a></li>
                  <li><a href="">Bus Schedule | New has been latelty floated</a></li>
                  <li><a href="">Bus Schedule | New has been latelty floated</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4 notice notice-event flex-col-center">
              <div class="notice-event-content flex-col-center notice-content">
                <h3>Upcoming Events</h3>
                <ul type="none">
                  <li><a href="">TECHNIX - Dept of Computer Science</a> <span class="date">29TH APRIL</span> </li>
                  <li><a href="">Bus Schedule | New has been latelty floated</a></li>
                  <li><a href="">Bus Schedule | New has been latelty floated</a></li>
                  <li><a href="">Bus Schedule | New has been latelty floated</a></li>
                  
                </ul>
              </div>
            </div>

        </div>

        <h1 class="gallery-header">GALLERY</h1>
        <div class="row image-gallery">


            <div class="col col-sm-2 img-container">
              <img src="./css/images/civil dept.jpg" alt="" srcset="" class="gallery-img">
              <div class="grid-overlay flex-col-center">
                <button class="viewbutton">View</button>
              </div>
            </div>

            <div class="col col-sm-2 img-container">
              <img src="./css/images/civil dept.jpg" alt="" srcset="" class="gallery-img">
              <div class="grid-overlay flex-col-center">
                <button class="viewbutton">View</button>
              </div>
            </div>

            <div class="col col-sm-2 img-container">
              <img src="./css/images/civil dept.jpg" alt="" srcset="" class="gallery-img">
              <div class="grid-overlay flex-col-center">
                <button class="viewbutton">View</button>
              </div>
            </div>

            <div class="col col-sm-2 img-container">
              <img src="./css/images/civil dept.jpg" alt="" srcset="" class="gallery-img">
              <div class="grid-overlay flex-col-center">
                <button class="viewbutton">View</button>
              </div>
            </div>

            <div class="col col-sm-2 img-container">
              <img src="./css/images/civil dept.jpg" alt="" srcset="" class="gallery-img">
              <div class="grid-overlay flex-col-center">
                <button class="viewbutton">View</button>
              </div>
            </div>

            <div class="col col-sm-2 img-container">
              <img src="./css/images/civil dept.jpg" alt="" srcset="" class="gallery-img">
              <div class="grid-overlay flex-col-center">
                <button class="viewbutton">View</button>
              </div>
            </div>

            <div class="overlay">
              <div class="overlay-inner flex-col-center">
                <button class="close">Close X</button>
                <img src="">
                <!-- <div class="spl-expt"></div> -->
              </div>
            </div> 

        </div>

        <footer>
            <div class="footer-content flex-col-center">
              <div class="icon-box">
                
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-linkedin"></i>
                  <i class="fa-solid fa-envelope"></i>
                  <i class="fa-brands fa-github"></i>
                  <i class="fa-brands fa-facebook"></i>
                
              </div>
              <div class="link-box">
                
                  <a id="xyz" href="#">HOME</a>
                  <span>|</span>
                  <a href="#">ABOUT</a>
                  <span>|</span>
                  <a href="#">CONTACT</a>
                  <span>|</span>
                  <a href="#">PRIVACY</a>
                
              </div>
            </div>
        </footer>
    </section>

    <div class="login-form-div">
    <!-- <form class="Login_form" action="post">
      <p class="email_info"><span>Email </span><input type="text" value=" name="username" class="form-control" id="inputEmail" placeholder="Username"></p>
      <p class="password_info"><span>Password </span><input class="textbox" type="text" placeholder="password"></p>
      <div class="radio_but">
          <span id="stud_rad"><input type="radio" name="rad" id="student" value="student"> Student </span>
          <span id="fac_rad"><input type="radio" name="rad" id="faculty" value="faculty"> Faculty </span>
      </div>
      <input id="sub_but" type="submit" value="Login">
    </form> -->
    <div class="main-div">
      <div class="panel">
          <h2>Admin Login</h2>
          <p>Please enter your username and password</p>
      </div>
      <form id="Login" class="Login_form" method="POST" action="login.php">
          <div class="form-group">
              <input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username" class="form-control" id="inputEmail" placeholder="Username">
          </div>
          <div class="form-group">
              <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
          <div class="form-group">
          <span id="stud_rad"><input type="radio" name="rad" id="student" value="student"> Student </span>
          <span id="fac_rad"><input type="radio" name="rad" id="faculty" value="faculty"> Admin </span>
          </div>
          <div class="form-group" style="text-align:left;">
              <label><input type="checkbox" name="remember" <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){ echo "checked";}?>> Remember me </label>
          </div>
          <!-- <div class="forgot">
              <a href="#">Forgot password?</a>
          </div> -->

          <input type="submit" class="btn btn-primary" id="sub_but" value="Login" name="login">
          <span>    <?php
              if (isset($_SESSION['message'])){
                  echo $_SESSION['message'];
              }
              unset($_SESSION['message']);
          ?></span>
      </form>
      </div>
  </div>


    
    <div class="bg_blur"></div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./app.js"></script>
    <!-- <script src="./script.js"></script> -->
    <script>

      const buttons = document.querySelectorAll(".img-container");
      const overlay = document.querySelector(".overlay");
      const overlayImage = document.querySelector(".overlay-inner img");

      function open(e){
        overlay.classList.add('open');
        const src = e.currentTarget.querySelector('img').src;
        overlayImage.src = src;
      }

      function close(){
        overlay.classList.remove('open');
      }

      buttons.forEach(button => button.addEventListener('click', open));
      overlay.addEventListener('click', close)

      let login_but=document.querySelector("#login_but")
      let logout_btn=document.querySelector("#logout_btn")
      let Login_form=document.querySelector(".Login_form")
      let bg_blur=document.querySelector(".bg_blur")
      let count=1
      login_but.addEventListener('click',function() {
        count++
        if(count%2==0){
          Login_form.style.visibility="visible"
          bg_blur.style.visibility="visible"
          login_but.style.display="none";
          logout_btn.style.display="none";
        }
        else{
          Login_form.style.visibility="hidden"
          bg_blur.style.visibility="hidden"
          login_but.style.display="span";
          logout_btn.style.display="none";
        }
      })
      login_form_div.addEventListener('click',()=>{
        login_form_div.style.display="none";
      })

    </script>

  
</body>
</html>