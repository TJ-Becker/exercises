<?php
require_once 'rectangle.php';
class square extends rectangle
{
    public function perimeter()
    {
        $perimeter = ($this->getHeight() * 4);
        return $perimeter;
    }

    public function __construct($side)
    {
        parent::__construct($side, $side);
    }
    public function area()
    {
        $area = ($this->getHeight() * $this->getWidth());
        var_dump($area);
        return $area;
    }
}
$square = new square(30);
var_dump($square->area());
var_dump($square->perimeter());