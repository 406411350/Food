<?php
class theorder { 
  private $theorder_id;
  private $theorder_total;
  private $theorder_payment;
  private $theorder_time;
  private $theorder_date;
  private $theorder_note;
  private $customer_id;

  function __set($variable, $value){}

  function __get($variable){  
    return $this->$variable;
  }


  function __construct(){
    $arguments = func_get_args();
    if (sizeof(func_get_args())==7){
      $this->theorder_id = $arguments["theorder_id"];
      $this->theorder_total = $arguments["theorder_total"];
      $this->theorder_payment = $arguments["theorder_payment"];
      $this->theorder_time = $arguments["theorder_time"];
      $this->theorder_date = $arguments["theorder_date"];
      $this->theorder_note = $arguments["theorder_note"];
      $this->customer_id = $arguments["customer_id"];
    }

  }

    
  function toArrayInserttheorder(){
      return array(
          "theorder_id" => $this->theorder_id, 
          "theorder_total" => $this->theorder_total, 
          "theorder_payment" => $this->theorder_payment,
          "theorder_time" => $this->theorder_time,
          "theorder_date" => $this->theorder_date,
          "theorder_note" => $this->theorder_note,
          "customer_id" => $this->customer_id);
  }
    
  function toArraytheorder(){
      return get_object_vars($this);
  }
   
}
?>