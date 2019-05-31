<!doctype html>
<head>
<title>
    My  global page learning
</title>
</head>
<body>
<?php
$bar="outside";
function foo(){
    global $bar;
    $bar="inside";
    echo $bar;
   }
foo();
echo "<br/>";
echo $bar;
?>
</body>

