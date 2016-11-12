<?php

class ModelCommentaire extends Model{
    
    private $commentaire;
    
    private $title;
    
    public function getData(){
        return $this->commentaire;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public static function getModelDefaultCommentaire(){
        $model = new self(array());
        
        $model->commentaire = Commentaire::getDefaultCommentaire();
        
        $model->title = "commentaire";
        return $model;
        
    }
    
    public static function getModelCommentaire($id)
    {
        $model = new self(array());
        
        $model->commentaire = CommentaireGateway::getCommentaireById($model->dataError,$id);
        
        $model->title = "Affichage commentaire";
        
        return $model;
        
    }
    
    
    public static function getModelCommentairePost($id, $auteur, $description, $dateMiseEnLigne){
        $model = new self(array());
        
        $commentaire = CommentaireFabrique::getCommentaire($model->dataError, $id, $auteur, $description, $dateMiseEnLigne);
        
        $model->commentaire = CommentaireGateway::postCommentaire($model->dataError,$commentaire);
        
        $model->title = "mise à jour commentaire fait";
        
        return $model;
                
    }
    
    public static function getModelCommentairePut($auteur,$descritpion,$dateMiseEnLigne,$idArticle)
    {
        $model = new self(array());
        $commentaire= CommentaireFabrique::getCommentaire($model->dataErrors, Config::generateRandomId(),$auteur,$descritpion,$dateMiseEnLigne,$idArticle);
        
        $model->commentaire = CommentaireGateway::putCommentaire($model->dataError,$commentaire);
     
        $model->title = "commentaire a ete posté.";
        
        return $model;
    }
    
    public static function deleteCommentaire($id)
    {
        $model = new self(array());
        
        $model->commentaire =CommentaireGateway::deleteCommentaire($model->dataError,$id);
        
        $model->title = "commentaire à ete supprimé.";
        
        return $model;
    }
    
    
    
}

?>


