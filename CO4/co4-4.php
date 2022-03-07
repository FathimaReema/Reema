<?php
$cricket=['kohli','rohit','sanju','shammi'];
$team=['rcb','mi','rr','kxlp'];
echo "<table>";
echo "<tr>";
echo"<th>Cricket player name</th>";
echo"<th>Team</th>";
echo "</tr>";
foreach($cricket as $i=>$value)
{
    echo "<tr><td>$cricket[$i]</td><td>$team[$i]</td></tr>";


}
?>
<style>
    table, td,th{
        border: 2px solid black;

    }
</style>
<!-- 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 -->