<?php

class Controleur
{
    
        function __construct() {
            
            try {
                
                switch($_REQUEST['action']){
                    
                     case "putCom":
                        require(dirname(__FILE__).'/validationCommentaire.php');
                        if(!empty($dataErrors)){
                            $commentaire = CommentaireFabrique::getCommentaire($datatest, null, $auteur, $description, $dateMiseEnLigne,$idArticle);
                            require(Config::getVueErreur()["erreurSaisieCommentaire"]);
                            break;
                        }
                        
                        
                        $model = ModelCommentaire::getModelCommentairePut($auteur, $description, $dateMiseEnLigne,$idArticle);
                      
                        if($model->getError()===false)
                        {
                            require(Config::getVues()["afficheCommentaire"]);
                        }else {
                            if(!empty($model->getError()['persistance'])){
                        
                            require(Config::getVueErreur()["default"]);
                        }else{
                            require (Config::getVueErreur()["default"]);
                        }
                        
                        }
                        break;
                     case "register":
                    
                        break;
                     case "get-all":
                        $model =  ModelCollectionArticle::getModelArticleAll();
                        if($model->getError() === false)
                        {
                            require(Config::getVues()["affichageCollectionArticle"]);
                        }else
                        {
                            foreach($model->getError() as $err)
                            {
                                echo $err;
                            }
                            //require(Config::getVueErreur()["default"]);
                        }
                        break;
                    case "saisie":
                        //require (direname(__FILE__).'/validationArticle') //pas besoin car cree par  l'admin
                        $model = ModelArticle::getModelDefaultArticle();
                        require(Config::getVues()["saisieArticle"]);
                        break;
                    case "edit":
                         $id = filter_var($_REQUEST['id'],FILTER_SANITIZE_STRING);
                         $model = ModelArticle::getModelArticle($id);
                        if($model->getError()===false)
                        {
                            require(Config::getVues()["editionArticle"]);
                        }else{
                            require (Config::getVueErreur()["default"]);
                        }
                        break;
                    case "get":
                        $id =  filter_var($_REQUEST['id'],FILTER_SANITIZE_STRING);
                        $model = ModelArticle::getModelArticle($id);
                        require(Config::getVues()["affichageArticle"]);
                        break;
                    case "post":
                       /* $id =  filter_var($_REQUEST['id'],FILTER_SANITIZE_STRING);
                        $titreArticle = filter_var($_REQUEST['titreArticle'],FILTER_SANITIZE_STRING);
                       $description= filter_var($_REQUEST['description'],FILTER_SANITIZE_STRING);
                       $dateMiseEnLigne= filter_var($_REQUEST['dateMiseEnLigne'],FILTER_SANITIZE_STRING);
                       */
                     
                       require(dirname(__FILE__).'/validationArticle.php');
                        $model = ModelArticle::getModelArticlePost($id,$titreArticle,$description,$dateMiseEnLigne);
                        if($model->getError()===false)
                        {
                            require(Config::getVues()["affichageArticle"]);
                        }else{
                            require (Config::getVueErreur()["saisieArticle"]);
                        }
                        break;
                    case "put":
                        require(dirname(__FILE__).'/validationArticle.php');
                        if(!empty($dataErrors)){
                            $article = ArticleFabrique::getArticle($datatest, null, $titreArticle, $description, $dateMiseEnLigne);
                            require(Config::getVueErreur()["erreurSaisieArticle"]);
                            break;
                        }
                        
                        
                        $model = ModelArticle::getModelArticlePut($titreArticle, $description, $dateMiseEnLigne);
                      
                        if($model->getError()===false)
                        {
                            require(Config::getVues()["affichageArticle"]);
                        }else {
                            if(!empty($model->getError()['persistance'])){
                        
                            require(Config::getVueErreur()["default"]);
                        }else{
                            require (Config::getVueErreur()["saisieArticle"]);
                        }
                        }
                        break;
                    case "delete":
                        //idem pour la verif
                        $id = filter_var($_REQUEST['id'],FILTER_SANITIZE_STRING);
                        $model = ModelArticle::deleteArticle($id);
                        if($model->getError()===false)
                        {
                            require(Config::getVues()["affichageArticle"]);
                        }else{
                            require (Config::getVueErreur()["default"]);
                        }
                        break;
                     
                    default:
                        require(Config::getVues()["default"]);
                        break;
                }
            }catch (Exception $e)
             {
             $model = new Model(array('exception' => $e->getMessage()));
                        
             require (Config::getVues()["default"]);
                        
             }
                        
     }
             
                
}
            
            
        
    
    



?>

