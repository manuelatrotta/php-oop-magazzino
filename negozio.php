<?php

class cosmetici {
  public $categoria;
  public $brand;
  public $temi;
  public $prezzo;
  public $inci;


  public function __construct($_categoria, $_brand)
  {
    $this->categoria = $_categoria;
    $this->brand = $_brand;
  }
}
var_dump($cosmetici);

 ?>
