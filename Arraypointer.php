<!doctype html>
<head>
<title>
    My  arraypointer page learning
</title>
</head>
<body>
<?php
    $ages=array(20, 24, 32, 45, 60, 65, 70);
    echo "1 ". current($ages)." years<br/>";
    next($ages);
    next($ages);
    echo "3 ".current($ages)." years <br/>";
while($age=current($ages))
{
    echo $age . " ";
    next($ages);
}

?>

</body>

