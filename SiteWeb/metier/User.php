<?php

require_once(dirname(__FILE__).'/UserPropertiesTrait.php');

class User
{
    
    protected $id;
    protected $nom;
    protected $prenom;
    protected $login;
    protected $password;
    protected $email;
    
    use UserProperties;
    
    function __construct($id,$nom, $prenom, $login, $password, $email) {
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setLogin($login);
        $this->setPassword($password);
        $this->setEmail($email);
    }
        
    public static function getDefaultUser(){
        $user = new User('0','Mon Nom', 'mon prenom','mon login','mon password', 'mon eamil@test.fr');
        $user->id="";
        $user->nom ="";
        $user->prenom="";
        $user->login="";
        $user->password="";
        $user->email="";
        return $user;
        
    }

    
}


?>

