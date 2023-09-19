<?php

abstract class Forme {
    
    private string $color;
    public function __construct($color)
        {$this->color = $color;}
    abstract public function surface();
}

class Rectangle extends Forme {
    private int $width;
    private int $height;
    public function __construct($color,$width, $height) {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }
    public function surface() 
        {return $this->width * $this->height;}
}

class Triangle extends Forme {
    private int $width;
    private int $height;
    public function __construct($color,$width, $height) {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }
    public function surface() 
        {return ($this->width * $this->height) / 2;}
}

class Circle extends Forme {
    private int $width;
    public function __construct($color,$width) {
        parent::__construct($color);
        $this->width = $width;
    }
    public function surface() 
        {return ($this->width **2) * pi();} // **chiffre pour elever un exposant
}

$rectangle1= new Rectangle('vert',5,6);
print_r($rectangle1);
echo "<br>";
echo $rectangle1->surface();
echo "<br>";

$triangle1= new Triangle('rouge',2,5);
print_r($triangle1);
echo "<br>";
echo $triangle1->surface();
echo "<br>";

$circle1= new Circle('violet',4);
print_r($circle1);
echo "<br>";
echo $circle1->surface();
echo "<br>";

?>