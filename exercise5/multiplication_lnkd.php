<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
    // Create first row of table headers
    <?php
    echo '<tr>';
    echo '<th>&nbsp;</th>';
    for ($col = 1; $col <= 12; $col++) :
        echo "<th>$col</th>";
    endfor;
$row=1;
$column=1;
while($row<=12){
    $column=1;
    echo "<tr>";
    echo "<th>$row</th>";
    while($column<=12){
        echo "<td>". ($row * $column)."</td>" ;
        $column=$column+1; 
    }
    echo "</tr>";
    echo "<br/>";
    $row=$row + 1;
}
?>

</table>
</body>
</html>