<?php
class Operation {
  public $nombre1;
  public $nombre2;

  public function __construct($nombre1 = 1, $nombre2 = 2) {
    $this ->nombre1 = $nombre1;
    $this ->nombre2 = $nombre2;
  }
   
}

$operation = new Operation();

echo "Nombre1: " . $operation->nombre1 . "<br>";
echo "Nombre2: " . $operation->nombre2 . "<br>";

$operation2 = new Operation(10, 20);

echo "Nombre1 (opération 2): " . $operation2->nombre1 . "<br>";
echo "Nombre2 (opération 2): " . $operation2->nombre2 . "<br>";

?>