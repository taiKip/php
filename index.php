
    <?php 
    echo __DIR__;
  class Car{
    public $color;
    public $model;
    public function __construct($color, $model){
            $this->color = $color;
            $this->model = $model;
    }

    public function message():string{
            echo __CLASS__;
            echo "<br>";
    return "My car is a " . $this->color . " " . $this->model . "!";

    }
  }


    $myCar = new Car("White", "Bmw");
    $myCar->message();
    var_dump($myCar);
    echo "<br>";
    echo strlen("Hello world!") . "<br>";

    echo str_word_count("Hello world!") . "<br>";

    echo strpos("Hello world!", "world") . "<br>";
    $x = "Hello world";

    echo strtoupper($x) . "<br>";

    echo str_replace("world", "Dolly", $x) . "<br>";

    echo trim($x) . "<br>";

    $y = explode(" ", $x) ;

    print_r($y) ;
    echo (substr($x, -5, 3)) . "<br>";

    $j = "Hi, how are you?";

    echo substr($j, 5, -3);
    define("NAME", "victor");

    
    echo strtoupper($NAME);

    define("cars", ["Alfa Romeo", "BMW", "Toyota"]);
    echo cars[0];

    $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    echo "<h3>Members</h3><br>";

    foreach ($members as $key => $value) {
        echo $key . "=>" . $value . "<br>";
    }
    ?>
