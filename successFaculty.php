<!-- //success.php -->
<?php
    session_start();
     
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('index.php');
        exit();
    }
    include('conn.php');



    // $query=mysqli_query($conn,"select * from user where user_id='".$_SESSION['id']."'");
    // $row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Success</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<style>
    .flex-col-center{
        /* border: 1px solid black; */
        width: 30%;
        margin-top: 5vw;
        margin-left: 34%;
        padding-top: 2vw;
        padding-bottom: 3vw;
        border-radius: 2vw;
        box-shadow: 2vw 2vw 3vw rgb(137, 137, 137);
    }
    .success-form-div{
        /* background: red; */
        height: 50vh;
    }
    .success-form-div h1{
        text-align: center;
        margin-bottom: 2vw;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .success-form-div input, select, textarea, input::placeholder{
        /* background: orange; */
        width: 40vh;
        margin: 1rem;
        font-size: 1rem;
        outline: none;
        border: none;
        border-bottom: 1px solid black;
    }
    .success-form-div textarea{
        border: 1px solid black;
        border-radius: 1vw;
    }

</style>
<body>
    <!-- <h2>Login Success</h2> -->
    <!-- <?php echo $row['user_email']; ?> -->
    <div class="success-form-div">
        <h1>Add New Faculty Details</h1>

        <form action="addFaculty.php" method="post" class="flex-col-center">
            <input type="text" name="fname" id="" placeholder="Name"><br>
            <input type="email" name="femail" id="" placeholder="Email"><br>
            <select name="dept" id="">
                <option value="it">IT</option>
                <option value="comp">COMP</option>
                <option value="etc">ETC</option>
            </select><br>
            <textarea name="desc" id="" cols="30" rows="10" placeholder="Description"></textarea>
            <button class="btn-primary" type="submit">Add</button>
        </form>
    </div>
</body>
</html>