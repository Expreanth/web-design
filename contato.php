<?php 
class contato{
  private $usu_Id;
  private $usu_Nome;
  private $usu_Email;
  private $usu_Tel;
  private $usu_Assunto;
  private $usu_Menssagem;

public function __get($ATTR){
  return $this->$ATTR;
}
public function __set($ATTR,$Valor){
  $this->$ATTR=$Valor;
}
}
?>
