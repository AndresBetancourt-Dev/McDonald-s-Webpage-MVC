<?php

class ClienteModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO clientes (id_cli, nom_cli, ema_cli, tel_cli) VALUES(:id, :nombre, :email, :telefono)');
            $query->execute(['id' => $data['id'], 'nombre' => $data['nombre'], 'email' => $data['email'], 'telefono' => $data['telefono']]);
            return true;
        }catch(PDOException $e){
            return false;
        }
       
    }

}

?>