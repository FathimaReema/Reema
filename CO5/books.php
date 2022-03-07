<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","","co4");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
exit();
}else{
  echo "done";
}
?>
<h1>Books</h1>
<form action="books.php" method="post">
    <input type="number" name="acNumber" placeholder="Accession Number">
    <input type="text" name="title" placeholder="title"  >
    <input type="text" name="author" placeholder="author">
    <input type="text" name="edition" placeholder="edition">
    <input type="text" name="publisher" placeholder="publisher">
    <input type="submit" name="submit" value="submit">
</form>
<form action="books.php" method="post">
    <input type="text" name="title" placeholder="Book title">
    <input type="submit" name="search" value="search">
</form>
<?php
if(isset($_POST['search'])){
    $title = $_POST['title'];
    $sql = "SELECT * FROM books WHERE title = '$title'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        echo "$title is available";
        echo "<table>";
        echo "<tr>";
        echo "<th>Accession Number</th>";
        echo "<th>Title</th>";
        echo "<th>Author</th>";
        echo "<th>Edition</th>";
        echo "<th>Publisher</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['acNumber']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['author']."</td>";
            echo "<td>".$row['edition']."</td>";
            echo "<td>".$row['publisher']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No result found";
    }
}
?>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $acNumber = $_POST['acNumber'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $edition = $_POST['edition'];
    $publisher = $_POST['publisher'];
    echo $acNumber;
    echo $title;
    echo $author;
    echo $edition;
    echo $publisher;
    $result = mysqli_query($con,"INSERT INTO `books` (`acNumber`, `title`, `author`, `edition`, `publisher`) VALUES ('$acNumber', '$title', '$author', '$edition', '$publisher');");
    // if($rs){
    //     echo "done";
    // }
}


// ?>