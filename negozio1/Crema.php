<?php
require_once 'Cosmetico.php';
 class Crema extends Cosmetico
{
  public $composizione;
  public $utilizzo;
  //con parent riprendo gli attributi del genitore e i controlli
  function __construct($_nome,$_prezzo, $_codice, $_categoria, $_composizione, $_utilizzo ) {
    parent::__construct($_nome,$_prezzo, $_codice, $_categoria);
    if(empty($_composizione)) {
      die('non è stata specificata la composizione');
    }elseif (empty($_utilizzo)) {
      die('non è stato specificato l\'utilizzo');
    }
    $this->composizione = $_composizione;
    $this->utilizzo = $_utilizzo;
  }

}
?>
