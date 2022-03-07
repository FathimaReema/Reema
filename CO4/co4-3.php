<?php
$student = ['sagar'=>'40','amal'=>'34','rahul'=>'46','niranjan'=>38,'abin'=>'50'];
print_r($student);
echo "<br>";
asort($student);
foreach ($student as $i => $j )
{
    echo "Name = ".$i." ->Age = ".$j;
    echo "<br>";

}
arsort($student);
echo"arsort <br>";
foreach ($student as $i => $j )
{
    echo "Name = ".$i." ->Age = ".$j;
    echo "<br>";

}
?>