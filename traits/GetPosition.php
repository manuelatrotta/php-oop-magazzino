<?php
//collegare trait ad una classe
trait GetPosition
{
  public $cosmetici;

  public function getPosition()
  {
    return $this->cosmetici;
  }

}
