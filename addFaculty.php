<?php
include('conn.php');
echo"Hi here";
// if (isset($_POST['login'])) {
    $facultyName = $_POST['fname']; 
    $facultyEmail = $_POST['femail']; 
    $facultyDept = $_POST['dept'];
    $facultyDesc = $_POST['desc'];

    echo $facultyDesc;


    $query = "insert into faculty(name,dept,description,email) values('$facultyName','$facultyDept','$facultyDesc', '$facultyEmail');";
    $result = mysqli_query($conn, $query);
    header('location:index.php');

    // $query2 = "select * from faculty;";
    // $result2 = mysqli_query($conn, $query2);

    // if (mysqli_num_rows($result2) > 0) {
    //     while ($row = mysqli_fetch_assoc($result2)) {
    //         echo "id: " . $row["id"];
    //     }
    // }
// }
?>