
<?php
$row=1;
$column=1;

while($row<=12){
    $column=1;
    echo "<td>";
    echo $row. " I ";
    while($column<=12){
        echo "<tr align=\"left\">";
        echo ($row*$column)." ";
        echo "</tr>";
        $column=$column+1; 
    }
    echo "<br/>";
    $row=$row + 1;
    echo "</td>";
}
?>