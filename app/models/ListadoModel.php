<?php

//include_once '../core/';

class ListadoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getData(){
     $customers = [];
      try{
          $query = $this->db->connect()->query("SELECT * FROM clientes");
          while($row = $query->fetch()){
              $customer = new Customer();
              $customer->identification = $row['id_cli'];
              $customer->name = $row['nom_cli'];
              $customer->email = $row['ema_cli'];
              $customer->phone = $row['tel_cli'];
              array_push($customers,$customer);
          }
          return $customers;
      }catch(PDOException $e){
          return [];
      }  
    }

}

?>