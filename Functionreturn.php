<!doctype html>
<head>
<title>
    My  function page learning
</title>
</head>
<body>
<?php
function add_subt($val1, $val2){
    $add=$val1+$val2;
    if($val1 > $val2){
        $subt=$val1-$val2;
    }
    else{
        $subt=$val2-$val1;
    }
  return array($add, $subt);
}
list($add_result,$subt_result)=add_subt(15,20);
echo "Addiotion is". $add_result ."<br/>";
echo "Subtraction is".$subt_result. "<br/>";



?>
</body>

