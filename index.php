<?php
$insert = false;

if(isset($_POST ['name'])){

$server ="localhost";
$username="root";
$password="";


$con = mysqli_connect($server,$username, $password);

if (!$con){
        die ("connection to this database failed due to " . mysqli_connect_error());

}
// echo "success connecting";

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];


$sql ="INSERT INTO `hackthon`.`hackthon` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;
//-> object operator

if($con-> query($sql) == true){
        // echo "susess inster";
        $insert =true;

}
else{
        echo "ERROR:$sql <br> $con -> error ";
        // $not_insert= true;
}

$con ->close();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1> Welcome To My College Hackthon</h1>
        <p>Enter your details to confirm your participation in haackthon</p>
        <?php
        if($insert == true){
          echo "<p class='submitMsg'>thanks for submitting</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">

            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone"placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other info here"></textarea>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>

        </form>

    </div>
    <script src="index.js"></script>


</body>
</html>