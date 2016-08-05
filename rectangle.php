<?php
class rectangle
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->setDimensions($height, $width);
    }

    public function setDimensions($height, $width) {
        $this->height = $height;
        $this->width = $width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getWidth() {
        return $this->width;
    }

    public function area()
    {
        $area = ($this->height * $this->width);
        return $area;
    }
}

$rectangle = new rectangle(40,50);
var_dump($rectangle);