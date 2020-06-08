<?php

class ProductoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO productos VALUES(:codigo, :nombre, :imagen, :precio, :cantidad, :descripcion)');
            $query->execute(['codigo' => $data['codigo'], 'nombre' => $data['nombre'], 'imagen' => $data['imagen'], 'precio' => $data['precio'], 'cantidad' => $data['cantidad'], 'descripcion' => $data['descripcion']]);
            return true;
        }catch(PDOException $e){
            return false;
        }
       
    }

}

?>