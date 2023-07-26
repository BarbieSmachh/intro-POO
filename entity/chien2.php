<?php

require_once 'entity/mammifère.php';


class Chien2 extends Mammifère
{
    public $color = "red";
    public function all() {
        echo "je ne fait pas la vaisselle";
}
}
?>