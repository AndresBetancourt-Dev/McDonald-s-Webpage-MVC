<?php

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


    public function getProductData(){
        $products = [];
        try{
            $query = $this->db->connect()->query("SELECT * FROM productos");
            while($row = $query->fetch()){
                $product = new Product();
                $product->code = $row['cod_pro'];
                $product->name = $row['nom_pro'];
                $product->image = $row['img_pro'];
                $product->price = $row['pre_pro'];
                $product->existences = $row['exi_pro'];
                $product->description = $row['desc_pro'];
                array_push($products,$product);
            }
            return $products;
        }catch(PDOException $e){
            return [];
        }  
    }

}

?>