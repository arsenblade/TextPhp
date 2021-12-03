<?php
class Point{
    public $x;
    public $y;
    public function __construct($x, $y) {
      $this->x = $x;
      $this->y = $y;
    }
    public function rename($x, $y) {
        $this->x += $x;
        $this->y += $y;
    }
}
class Vector{
    public $x;
    public $y;
    public function __construct($x, $y) {
      $this->x = $x;
      $this->y = $y;
    }
    public function Lenght() {
        $length=round(sqrt(pow(($this->x), 2) + pow(($this->y), 2)), 2);
        if($length==0){
            echo "Вектор является нулевым<br>";
        }
        else {
            return $length."<br>";
        }
    }
    public function Perpendicular($vector){
        $result=$this->x*$vector->x+$this->y*$vector->y;
        if($result==0){
            echo "Векторы перпендикулярны<br>";
        }
        else {
            echo "Векторы не перпендикулярны<br>";
        }
    }
}
$pointT1=new Point(1,1);
$a=new Vector(6,3);
$b=new Vector(3,-6);
$c=new Vector(0,0);
$d=new Vector(0,1);
echo $a->Lenght();
echo $b->Lenght();
echo $c->Lenght();
$a->Perpendicular($b);
$a->Perpendicular($d);
$pointT1->rename($a->x,$a->y);
echo "x: ".$pointT1->x." y: ".$pointT1->y;
?>