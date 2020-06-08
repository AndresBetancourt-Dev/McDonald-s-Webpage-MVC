<?php


class LoginModel extends Model{
    private $name;
    private $username;

    public function __construct(){
        parent::__construct();
    }

    public function userExists($user,$pass){
        try{
        $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE ema_usr = :user AND pass_usr = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);
        if($query->rowCount()){
                return true;
        }
        }catch(PDOException $e){
            return false;
        }  
    }

    public function setUser($user){
        $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE ema_usr = :user');
        $query->execute(['user' => $user]);

        foreach($query as $currentUser){
            $this->name = $currentUser['nom_usr'];
            $this->username = $currentUser['ema_usr'];
        }
    }

    public function getUser(){
        return $this->name;
    }
}


?>