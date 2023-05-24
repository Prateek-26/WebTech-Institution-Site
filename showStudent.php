<?php
session_start();
include('conn.php');

if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('index.php');
    exit();
}

if (isset($_COOKIE["user"]) and isset($_COOKIE["pass"]) and isset($_COOKIE["useremail"])) {
    echo "Cookie Present";
    $useremail = $_COOKIE["useremail"];
    // echo $useremail;
} else {
    echo "Cookie not Present";
}

$query = "select * from student where email='$useremail';";
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"];
        $sname = $row["name"];
        $sgender = $row["gender"];
        $srno = $row["rollno"];
        $sprno = $row["prno"];
        $sdept = $row["dept"];
        $syear = $row["year"];
        $semail = $row["email"];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/cbe5eee2e7.js" crossorigin="anonymous"></script>
    
    <!-- CSS LINK -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <section class="home-section">
        <header>
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
                        <a class="nav-link active" aria-current="page" href="./index.html" style="color: #fff; text-shadow: 0 #fff;">Home</a>
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

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  disabled>
                          Administration
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#" style="color: black; text-shadow: 0 0;">Director</a></li><li><a class="dropdown-item" href="#" style="color: black; text-shadow: 0 0;">HODs</a></li><li><a class="dropdown-item" href="#" style="color: black; text-shadow: 0 0;">Key Faculty</a></li>
                        </ul>
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
        <div class="student_img_Name">
            <!-- <img src="/pics/putin.img" alt=""> -->
            <span class="name"><b><?php echo $sname ?></b></span>
        </div>

        <div class="other_info">
            <p><span><b>Roll no : </b></span><label><?php echo $srno ?></label></p>
            <p><span><b>Permanent registration no : </b></span><label for=""><?php echo $sprno ?></label></p>
            <p><span><b>Gender : </b></span><label for=""><?php echo $sgender ?></label></p>
            <!-- <p><span><b>Fees pending : </b></span><label for="">None</label></p> -->
            <p><span><b>Current year : </b></span><label for=""><?php echo $syear ?></label></p>
            <p><span><b>Dept : </b></span><label for=""><?php echo $sdept ?></label></p>
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
    </section> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./app.js"></script>
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

      

    </script>



</body>
</html>