<?php

require_once 'entity/animal.php';


abstract class Mammifère extends Animal
{
    public $breeding = "allaitement";
    public function infoPlus() {
    echo "je suis un mammifère";
    }
}

?>