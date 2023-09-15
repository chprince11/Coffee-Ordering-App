<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page </title>
</head>

<style>
       body
        {
            background-color: #c6b49dc7;
            color: #5c1010;
        }
</style>

<body>

    <?php

    echo "<h1>Thanks for your order. Here it is:</h1><br>";

    $num = $_POST['coffeeNum'];
    $size = $_POST['size'];
    
    $price = 0;

    $creams = $_POST['creamNum'];
    $sugars = $_REQUEST['sugarNum'];
    
    if ($size === "small") 
    {
        $price = 2.19;
    } elseif ($size === "medium") 
    {
        $price = 2.49;
    } elseif ($size === "large") 
    {
        $price = 2.79;
    } elseif ($size === "extra-large") 
    {
        $price = 3.19;
    }

    $price = $price * intval($num);
    $final = ($price * $num + ($price * 0.13));
 
    for ($b = 1; $b <= $num; $b++) 
    {
        if ($size == "small") {
            echo '<img src="cup.jpg" alt="cup" style="height:80px;width:auto;">';
        } elseif ($size == "medium") 
        {
            echo '<img src="cup.jpg" alt="cup" style="height:120px;width:auto;">';
        } elseif ($size === "large") 
        {
            echo '<img src="cup.jpg" alt="cup" style="height:150px;width:auto;">';
        } elseif ($size === "extra-large") 
        {
            echo '<img src="cup.jpg" alt="cup" style="height:180px;width:auto;">';
        }
    }

    if ($creams != "0" && $creams !== "") 
    {
        echo '<img src="plus.jpg" alt="plus" style="height:80px;width:auto;">';
    }
    for ($i = 1; $i <= $creams; $i++) 
    {
        echo '<img src="cream.jpg" alt="cream" style="height:100px;width:auto;">';
    }
    if ($sugars != "0" && $sugars !== "") 
    {
        echo '<img src="plus.jpg" alt="plus" style="height:80px;width:auto;">';
    }
    for ($j = 1; $j <= $sugars; $j++) 
    {
        echo '<img src="sugar.jpg" alt="sugar" style="height:100px;width:auto;">';
    }

    echo "<br>";
    echo "<br>";

    echo "Amount Due: " . "$".$price . " x " . $num ." + tax = ". "<strong>"."$".$final ."<strong>" . "<br>";

    ?>

</body>

</html>