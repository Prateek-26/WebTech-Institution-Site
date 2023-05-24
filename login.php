<!-- //login.php -->
<?php
echo "Into Login!";
if (isset($_POST['login'])) {

    session_start();
    include('conn.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $person = $_POST['rad'];

    // echo"$username + $password + $person" ;

    if ($person == "faculty")
        $query = mysqli_query($conn, "select * from user where user_name='$username' && user_password='$password' && person='faculty'");
    else if ($person == "student")
        $query = mysqli_query($conn, "select * from user where user_name='$username' && user_password='$password'  && person='student'");


    if (mysqli_num_rows($query) == 0) {
        $_SESSION['message'] = "Login Failed. User not Found!";
        header('location:index.php');
    } else {
        echo "Successfully Logged In";if (mysqli_num_rows($result) > 0) {
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

        $row = mysqli_fetch_array($query);

        if (isset($_POST['remember'])) {
            //set up cookie
            setcookie("useremail", $row['user_email'], time() + (86400 * 30));
            setcookie("user", $row['user_name'], time() + (86400 * 30));
            setcookie("pass", $row['user_password'], time() + (86400 * 30));
        }

        $_SESSION['id'] = $row['user_id'];
        if ($person == "faculty")
            header('location:successFaculty.php');
        else
            header('location:showStudent.php');
    }
} else {
    header('location:index.php');
    $_SESSION['message'] = "Please Login!";
}
?>