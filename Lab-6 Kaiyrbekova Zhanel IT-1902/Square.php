
<?php
include 'Figure.php';
class Square extends Figure{
    private $a;
    const Side_Count=4;
    public function __construct($a)
    {$this->a=$a;

    }
    public function getArea(){
        $area=$this->a * $this->a;
        return $area;
    }
    final public function infoAbout()
    {
        return  "This is ".__CLASS__." class. It has ".Square::Side_Count." sides.";
    }


}

?>


