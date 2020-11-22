<?php
class food{
   
  private $food_id;
  private $food_name;
  private $food_price;
  private $store_id;
  private $canbuy;


  function __set($variable, $value){}
    
  function __get($variable){  
    return $this->$variable;
  }

  /* constructor */
  function __construct(){

    $arguments = func_get_args();
    if (sizeof(func_get_args()) == 5){
      $this->food_id = $arguments["food_id"];
      $this->food_name = $arguments["food_name"];
      $this->food_price = $arguments["food_price"];
      $this->store_id = $arguments["store_id"];
      $this->canbuy = $arguments["canbuy"];
    }
  }
  
}
?>