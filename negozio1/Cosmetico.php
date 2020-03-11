<?php
//creo una classe prodotto generico
require_once 'traits/Autorizzazione.php';
class Cosmetico {
  use Autorizzazione;
  public $nome;
  public $prezzo;
  public $categoria;
  public $codice;
  public $poster;
  public $descrizione;
  public $inci;
  public $brand;
//funzione in cui passo gli attributi primari. Si possono fare anche dei controlli di verifica oggetti
  function __construct($_autorizzazione,$_nome,$_prezzo, $_codice, $_categoria) {
    if(!empty($_autorizzazione)) {
      $this->getAutorizzazione($_autorizzazione);
    }
    if($this->autorizzato==false) {
      //die('non hai l\'autorizzazione');
      throw new Exception('non hai l\'autorizzazione');

    }
    if(!is_float ($_prezzo)) {
      die('non è un decimale');
    }elseif (strlen($_codice)!== 10) {
      die('non è un codice');
    }elseif (empty($_categoria)) {
      die('non è una categoria');
    }
    $this->prezzo = $_prezzo;
    $this->codice = $_codice;
    $this->categoria = $_categoria;
    $this->nome = $_nome;
  }

  public function getScheda () {
    $result = [
      'codice'=> $this->codice,
      'prezzo'=> $this->prezzo,
      'descrizione'=> $this->descrizione,
      'categoria'=> $this->categoria,
    ];
    return $result;
  }
} ?>
