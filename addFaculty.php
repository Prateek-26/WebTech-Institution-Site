<?php
include('conn.php');
if (isset($_POST['login'])) {
    // echo"Hi here";
    $facultyName = $_POST['fname'];
    $facultyDept = $_POST['dept'];
    $facultyDesc = $_POST['desc'];


    $query = "insert into faculty(name,dept,description) values('$facultyName','$facultyDept','$facultyDesc');";
    $result = mysqli_query($conn, $query);
    header('location:index.php');

    // $query2 = "select * from faculty;";
    // $result2 = mysqli_query($conn, $query2);

    // if (mysqli_num_rows($result2) > 0) {
    //     while ($row = mysqli_fetch_assoc($result2)) {
    //         echo "id: " . $row["id"];
    //     }
    // }
}
?>