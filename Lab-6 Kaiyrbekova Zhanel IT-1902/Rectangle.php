
<?php
include 'Figure.php';
class Rectangle extends Figure{
    private $a;
    private $b;
    const Side_Count=4;
    public function __construct($a,$b)
    {$this->a=$a;
    $this->b=$b;

    }
    public function getArea(){
        $area=$this->a * $this->b;
        return $area;
    }
   final  public function infoAbout()
    {
        return  "This is ".__CLASS__." class. It has ".Rectangle ::Side_Count." sides.";
    }


}

?>

