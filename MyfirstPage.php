<!DOCTYPE html>
<html>
<head>
    <title> My first HTML page</title>
</head>
<body>
    <?php echo "Hello world"; ?> <br />
    <?php echo "hello" . "World"; ?> <br/>
    <?php echo 2+3;?>
    
    <?php 
        $var1 = 10;
        echo $var1
    ?>
    <?php 
        echo "<br />"
    ?>
    <?php
        $var2=100;
        echo $var2;
    ?>
    <br/>
    <?php
        $greeting="Hello";
        $Target="new world";
        $Phrase="$greeting" . " " . "$Target";
        echo $Phrase;
        echo "<br />";
        echo "{$Phrase} Again<br />";
    ?>
    <?php
        $first="The quick brown fox";
        $second=" Jumped over the lazy dog .";
        $third=$first;
        $third .=$second;
        echo $third;
    ?>
    <?php
    // string operations
    ?>

    <br/>
    <?php
    echo strtolower($third);
    echo strtoupper($third);
    echo ucfirst($third);
    echo ucwords($third);
    ?>
    <br/>
    length:<?php echo strlen($third) ?> </br>
    trim:<?php echo "A". trim(" B C D ") . "E"?><br/>
    find:<?php echo strstr($third, "brown")?><br/>
    Replace by string:<?php echo str_replace("quick", "super-fast", $third)?><br/>
    <br/>
    Repeat:<?php echo str_repeat($third, 2); ?> </br>
    trim:<?php echo substr($third, 5, 10);?><br/>
    find:<?php echo strpos($third, "brown");?><br/>
    find a character:<?php echo strchr($third, "z");?><br/>
    <br/>
<?php 
//number play in below section
?>

Absolute value:<?php echo abs(0-300); ?> </br>
Exponential:<?php echo pow(2,8);?><br/>
Square root:<?php echo sqrt(16);?><br/>
Modulo:<?php echo fmod(10, 7);?><br/>
Random:<?php echo rand();?><br/>
Random(min, max):<?php echo rand(1, 10);?><br/>
<br/>
<?php
$var2+=4;
echo $var2
?>
<br/>
<?php $var2++; echo $var2;?><br/>
<?php $var2--; echo $var2;?><br/>
<?php
//floatring point discussion
?>
<?php echo $float=3.14;?> <br/>
<?php echo $float + 7;?> <br/>
<?php echo round($float, 1);?><br/>
<?php echo ceil($float);?><br/>
<?php echo floor($float);?><br/>
</br>
<?php 
    $int=3;
    $float=4.5;
?>
<?php echo " is {$int} integer ". is_int($int);?><br/>
<?php echo "is {$float} float ". is_float($float);?><br/>
<?php echo "is {$float} numeric ". is_numeric($float);?><br/>

<?php
// Array playbook
?>
<?php
$number_array=array(1,3,5,7,9);
echo $number_array[1];
echo "<br />";
$mixed=array(6,'C',"fox",array(1,3,4,5));
echo $mixed[2];
?>
<pre>
<?php 
    echo print_r($mixed);
?>
</pre>
<?php echo $mixed[3][1]; ?> <br/>

<?php
//key value pair for the associative arrays
?>

<?php
$assoc=array("first_name"=>"Bibhu Ashish", "last_name"=>"Panda");
echo $assoc["first_name"]; 
?>
<?php
echo "<br />"
?>
<?php
echo $assoc["first_name"] . " ".$assoc["last_name"];
?>
<?php
//Array functions being played around below
?>
<?php
 echo "count of the array is" . " " . count($mixed);?>
<?php
echo "<br />"
?>
<?php
echo "Max of the array is" . " " . max($mixed);?>
<?php
echo "<br />"
?>
<?php echo "Min of the array is" . " " . min($mixed);?>
<?php
echo "<br />"
?>

</body>
</html>
