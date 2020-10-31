<?php
 require_once("dbase.php");


class equations {
  $name;
  $num;
  $eqimg;
  $field;

  function __contruct($name){
    $this->name = $name;
    $this->num = $num;
    $this->eqimg = $eqimg;
    $this->field = $field
  }
  function  eqdata(){
    echo "field".$this->field."No.".$this->num."name".$this->name;
  }
}
$NO1 = new equations(No1);
//このページは保留中
?>
