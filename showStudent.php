<?php
    session_start();
    include('conn.php');
     
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('index.php');
        exit();
    }

    if (isset($_COOKIE["user"]) AND isset($_COOKIE["pass"]) AND isset($_COOKIE["useremail"])){
        echo "Cookie Present";
        $useremail = $_COOKIE["useremail"];
        echo $useremail;
    }else{
        echo "Cookie not Present";
    }

        $query = "select * from student where email='$useremail';";
    $result = mysqli_query($conn, $query);


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"];
        }
    }



?>