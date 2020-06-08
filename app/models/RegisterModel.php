<?php


class RegisterModel extends Model{
  
    public function __construct(){
        parent::__construct();
    }
    

    public function insertNewUser($user,$name,$password){
        try{
            $query =  $this->db->connect()->prepare('INSERT INTO usuarios VALUES(:user, :nombre, :pass)');
            $query->execute(['user' => $user, 'nombre' => $name, 'pass' => $password]);
            return true;
        }catch(PDOException $e){
            return false;
        }
       
    }
}


?>