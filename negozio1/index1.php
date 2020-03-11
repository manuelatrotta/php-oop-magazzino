<?php
//una sola volta
  require_once 'Cosmetico.php';
  require_once 'Crema.php';
//creo una nuova variabile in cui passo attributi primari
  try {
    $mascara = new Cosmetico('','mascara',15.45, 'mmmmmmmmmm', 'occhi');
      //var_dump($mascara);
      $mascara->descrizione='allungante';
      var_dump($mascara);


  } catch (Exception $e) {
    echo "hai un errore:". $e->getMessage();
  }
  $mascara = new Cosmetico('lll','mascara',15.45, 'mmmmmmmmmm', 'occhi');
    //var_dump($mascara);
    $mascara->descrizione='allungante';
    var_dump($mascara);

  $rossetto = new Cosmetico('lllll','rossetto',30.20, 'cccccccccc', 'labbra');
    $rossetto->brand='Chanel';
    $rossetto->getScheda();

    var_dump($rossetto->getScheda());

    $antirughe = new Crema('ddd','superantirughe',300.20, 'cccccccccc', 'viso','gel', 'applicare');
      $antirughe->brand='booleanfactory';
      var_dump($antirughe);







 ?>
