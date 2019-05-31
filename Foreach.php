<!doctype html>
<head>
<title>
    My  foreach loop page learning
</title>
</head>
<body>
<?php
    $ages=array(20, 24, 32, 45, 60, 65, 70);
    foreach ($ages as $age)
    {
        echo "Age is {$age} years<br/>";
    }

    $Names=array("first_Name"=>"Bibhu Ashish",
                 "last_name"=>"Panda",
                 "Address"=>"Bangalore",
                 "State"=>"Karnataka"
                );
    foreach ($Names as $attribute=>$data)
    {
        $attr_nice=ucwords(str_replace("_"," ", $attribute));
        echo "{$attr_nice}: {$data}";
        echo "<br/>";
    }

    $Item_price=array("New Computer"=>2000,
                 "Online course"=>2500,
                 "travel home"=>1500,
                 "Stay With Adya"=>null
                );
    foreach ($Item_price as $item=>$value)
    {
        if(is_int($value)){
            echo "{$item} costs {$value} rupees</br>";
        }
        else{
            echo "{$item} is priceless";
        }
         echo "<br/>";
    }
?>
</body>

