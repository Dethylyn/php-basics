<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    HELLO, WORLD!
    
    <?php
        $myName = "Dethylyn";
        $myAge = 21;
        $a_student = true;
        $num1 = 3;
        $num2 = 2;
        $sum = $num1 + $num2;

        if ($a_student == true){
            echo "<br>Dethylyn is a student.</br>";
        }
        echo $sum;

        //this concatenates $myName
        echo "<br> Hello, " . $myName;
    ?>

</body>
</html>