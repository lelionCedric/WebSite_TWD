<?php

class ControleurFront{
    
    function __construct(){
        try
        {
            $action=$_REQUEST['action'];
            $modelUser=Authentication::restoreSession();
            $role=($modelUser->getError()===false) ? $modelUser->getRole() : "";
            switch ($action){
                case "auth" : //vue saisie login/pass
                case "validateAuth" : //validation login/pass
                    $publicCtrl = new ControleurPublic($action);
                    break;
                case "saisie" : // saisie new adresse
                case "edit" : //saisie modif adresse
                case "post" : //met a jour adresse dans BD
                case "put" : //création adresse dans BD
                case "delete" : //supp adresse a partir de son ID
                    if ($role=="admin") {
                        $adminCtrl = new ControleurAdmin($action);
                    } else {
                        require (Config::getVueErreur()["authentification"]);
                    }
                    break;
                case "get" : //affiche adresse a partir de son ID
                case "get-all" : //affiche toute les adresses
                default : //action indefinie page par defaut
                    if ($role=="admin"){
                        $adminCtrl = new ControleurAdmin($action);
                    } else{
                        $publicCtrl = new ControleurPublic($action);
                    }
            }
        } catch (Exception $ex) {
            $modele = new Model(array('exception' => $e->getMessage()));
            require (Config::getVueErreur()["default"]);
        }
    }
}
?>