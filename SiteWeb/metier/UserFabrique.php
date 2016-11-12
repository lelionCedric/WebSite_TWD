<?php


require_once(dirname(__FILE__).'/User.php');

class UserFabrique
{
     public static function getUser(&$dataErrors,$id=null,$nom=null,$prenom=null,$login=null,$password=null,$email=null){
        $user = User::getDefaultUser();
        $dataErrors = array();
        
        try
        {
            $user->setId($id);
        } catch (Exception $e) {
            $dataErrors['id'] = $e->getMessage()."<br/>\n";
        }
        
        try
        {
            $user->setNom($nom);
        } catch (Exception $e) {
            $dataErrors['nom'] = $e->getMessage()."<br/>\n";
        }
        try
        {
            $user->setPrenom($preonm);
        } catch (Exception $e) {
            $dataErrors['prenom'] = $e->getMessage()."<br/>\n";
        }
        try
        {
          $user->setLogin($login);
        } catch (Exception $e) {
            $dataErrors['login'] = $e->getMessage()."<br/>\n";
        }
        try
        {
            $user->setPassword($password);
        } catch (Exception $e) {
            $dataErrors['password'] = $e->getMessage()."<br/>\n";
        }
        try
        {
            $user->setEmail($email);
        } catch (Exception $e) {
            $dataErrors['email'] = $e->getMessage()."<br/>\n";
        }     
        
        return $user;
    }
    
}



?>

