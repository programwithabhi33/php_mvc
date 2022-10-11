<?php
class Abhi{
    public $name;
    public $hobby;
    public function __construct($name,$hobby){
        $this->name = $name;
        $this->hobby = $hobby;
    }
}

$main = array(
    "abhi" => New Abhi('Abhishek','Software Development'),
    'ab' => new Abhi('abhi','cricket'),
);
print_r($main);
?>