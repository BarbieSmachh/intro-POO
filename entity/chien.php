<?php

require_once 'entity/mammifère.php';


class Chien extends Mammifère
{
    public $name="Le chien";
    public function crie() {
    echo "j'aboie";
    }
}
?>