<?php
class customers { 
  private $customer_name;
  private $customer_account;
  private $customer_password;
  private $customer_phone;
  private $customer_cardnumber;

  function __set($variable, $value){}

  function __get($variable){  
    return $this->$variable;
  }


  function __construct(){
    $arguments = func_get_args();
    if (sizeof(func_get_args())==5){
      $this->customer_name = $arguments[customer_name];
      $this->customer_account = $arguments[customer_account];
      $this->customer_password = $arguments[customer_password];
      $this->customer_phone = $arguments[customer_phone];
      $this->customer_cardnumber = $arguments[customer_cardnumber];
    }
      
    if (sizeof(func_get_args())==1){
      $this->customer_name = $arguments[0]["customer_name"];
      $this->customer_account = $arguments[0]["customer_account"];
      $this->customer_password = $arguments[0]["customer_password"];
      $this->customer_phone = $arguments[0]["customer_phone"];
      $this->customer_cardnumber = $arguments[0]["customer_cardnumber"];
    }
  }

    
  function toArrayInsert(){
      return array(
          "customer_name" => $this->customer_name, 
          "customer_account" => $this->customer_account, 
          "customer_password" => $this->customer_password,
          "customer_phone" => $this->customer_phone,
          "customer_cardnumber" => $this->customer_cardnumber);
  }
    
  function toArray(){
      return get_object_vars($this);
  }
   
}
?>