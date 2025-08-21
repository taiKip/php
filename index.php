<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $color = "red";
    $txt = "cars";
    echo "I love " . $txt . "<br>";
    echo "My car is " . $color . "<br>";
    echo "Hello World!<br>";
    $x = 5;
    $y = 7;
    function myTest($x)
    {

        echo "<p>Variable x  inside function is: $x</p>";
    };

    echo "<p> Variable x outside function is: $x</p>";

    function myTest2()
    {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }


    myTest2();

    echo $y;

    function myTest3(): void
    {
        static $x = 0;
        echo "" . $x . "<br>";
        $x++;
    }
    myTest3();
    myTest3();
    myTest3();
    print("<h2>PHP is Fun! $x</h2>");

    $a = "Hello world!";
    $b = "Hello world!";

    var_dump($a);
    echo "<br>";
    var_dump($b);

    $cars = array("Volvo", "BMW", 1);

    var_dump($cars);

    ?>
</body>

</html>