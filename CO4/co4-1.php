<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="co4-1.php" method="POST">
        <input type="text" name="Name" placeholder="Enter your name">
        <input type="mobile" name="Mobile" placeholder="Enter your mobile number" >
        <input type="email" name="Email" placeholder="enter ypur email id">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $name = $_POST['Name'];
    $mobile = $_POST['Mobile'];
    $email = $_POST['Email'];
    if(empty($name.$mobile.$email)){
        echo "please enter the values";
    }
    if(!preg_match("/^[a-zA-Z]*$/",$name)){
        echo "only alphabet and whitespace are allowed <br>";
    }
    if(!preg_match("/^[0-9]*$/",$mobile)){
        echo "please enter valid number <br>";
    }
    $nn = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    if(!preg_match ($nn, $email)){
        echo "please enter valid email id <br>";
    }
}
?>