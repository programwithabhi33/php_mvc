<?php
 class main{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function show(){
        echo $this->name;
    }
 }

?>