
<?php
include 'Figure.php';
class Triangle extends Figure {
    private $a;
    private $b;
    private $c;
    const Side_Count=3;
    public function __construct($a,$b,$c)
    {$this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }

    public function getArea(){
        $p=($this->a+$this->b+$this->c)/2;
        $area=sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
        return $area;
    }
    final public function infoAbout()
    {
        return  "This is ".__CLASS__." class. It has ".Triangle::Side_Count." sides.";
    }


}
?>

