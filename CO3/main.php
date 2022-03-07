<!DOCTYPE html>
<html>
<head>
<title>CO3</title>
<style>
    table , th , td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
</head>
<body>
<table>
<tr>
<th>Name</th>
<th>Age</th>
</tr>
<?php
$con=mysqli_connect("localhost", "root", "", "co3");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
exit();
}else{
//   echo "done";
}
$result = mysqli_query($con,"SELECT * FROM `student`");
while($row=mysqli_fetch_array($result)){
    echo "
<tr>
    <td>".$row['name']."</td>
    <td>".$row['age']."</td>
</tr>";
} ?>
</table>
<form action="main.php" method="post">
<input type="text" name="name" placeholder="Name">
<input type="text" name="age" placeholder="Age">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $age=$_POST['age'];
        
        $result = mysqli_query($con,"INSERT INTO `student`(`name`, `age`) VALUES ('$name','$age')");
            header("refresh: 1;");
    }
?>