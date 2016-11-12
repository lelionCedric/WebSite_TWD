<?php

require_once (dirname(__FILE__).'/Model.php');
require_once (dirname(__FILE__).'/../persistance/CommentaireGateway.php');
class ModelCollectionCommentaire extends Model
{
    
    private $collectionCommentaire;
    
    public function getData()
    {
        return $this->collectionCommentaire;
    }
    
    public function __construct() {
        
        $this->collectionCommentaire= array();
        $this->dataError = array();
        
    }
    
    public static function getModelCommentaireAllByArticle($idArticle)
    {
        $model = new self(array());
        
        $model->collectionCommentaire = CommentaireGateway::getArticleAllByIdArticle($model->dataError, $idArticle);
        
        return $model;
    }
    
}

?>


