<!doctype html>
<head>
<title>
    My loop page learning
</title>
</head>
<body>
<?php
    $a=1;
    while($a<=20){
        if(($a%2)==0)
        {
            echo "{$a} is even<br/>";
        }
        else{
            echo "{$a} is odd<br/>";
        }
    $a++;
    }
?>
</body>

