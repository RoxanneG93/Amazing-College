<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>

<!-- pre defined wordpress functions -->
    <h1><?php bloginfo()?></h1>
    <p><?php bloginfo('description');?></p>


    <!-- functions -->
    <?php 
        // echo 2 + 2;
        function myFirstFunction(){
             echo "waddup";
        }

        myFirstFunction();

        function greet($name, $color){
            echo "Hi, my name is  $name and my favorite color is $color .";
        }

        greet("Debrah", "red");
    
    ?>

    <!-- Arrays -->
    <?php
        $goodFood = "mandu"; 

        $foods = array('ramen', 'sushi', 'mandu', 'cabbage');

        $count = 0;


        // while($count <= 100 ){
        //     echo "<li>$count</li>";
        //     $count++;

        // } 

        while($count < count($foods)){
            echo "<li>My favorite foods are $foods[$count]</li>";
            $count++;
        }
    
    ?>



    <p>best food right now is <?php echo $goodFood ?></p>

    <p>What i'm craving right now is <strong><?php echo $foods[2]?></strong> </p>
</body>
</html>