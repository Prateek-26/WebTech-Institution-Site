<!-- //success.php -->
<?php
    session_start();
     
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('index.php');
        exit();
    }
    include('conn.php');
    $query=mysqli_query($conn,"select * from user where user_id='".$_SESSION['id']."'");
    $row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Success</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<style>

    .success-form-div{
        /* background: red; */
        height: 50vh;
    }
    .success-form-div input, select, textarea, input::placeholder{
        /* background: orange; */
        width: 30vh;
        margin: 1rem;
        font-size: 1.5rem;
    }

</style>
<body>
    <!-- <h2>Login Success</h2> -->
    <!-- <?php echo $row['user_email']; ?> -->
    <div class="success-form-div">
        <h1>Add New Faculty Details</h1>

        <form action="addFaculty.php" method="post" class="flex-col-center">
            <input type="text" name="fname" id="" placeholder="Name"><br>
            <select name="dept" id="">
                <option value="it">IT</option>
                <option value="comp">COMP</option>
                <option value="etc">ETC</option>
            </select><br>
            <textarea name="desc" id="" cols="30" rows="10" placeholder="Description"></textarea>
            <!-- <button type="submit">Add</button> -->
            <input type="submit" class="btn btn-primary" id="sub_but" value="Login" name="login">
        </form>
    </div>
</body>
</html>