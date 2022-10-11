<?php
class Abhi{
    public static function mainThing(){
        echo "This is the statuc function in the Abhi class";
    }
    public function abhi(){
        print_r($_GET);
    }

}
$abhi2 = new abhi();
$abhi2->abhi();
// Abhi::mainThing();
$abhi2->mainThing();
Abhi:: abhi();

?>