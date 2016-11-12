<?php

class ModelArticle extends Model{
    
    private $article;
    
    private $title;
    
    public function getData(){
        return $this->article;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public static function getModelDefaultArticle(){
        $model = new self(array());
        
        $model->article = Article::getDefaultArticle();
        
        $model->title = "Saisie d'un nouvelle article";
        return $model;
        
    }
    
    public static function getModelArticle($id)
    {
        $model = new self(array());
        
        $model->article = ArticleGateway::getArticleById($model->dataError,$id);
        
        $model->title = "Affichage d'un article";
        
        return $model;
        
    }
    
    
    public static function getModelArticlePost($id, $titreArticle, $description, $dateMiseEnLigne){
        $model = new self(array());
        
        $article = ArticleFabrique::getArticle($model->dataError,$id,$titreArticle,$description,$dateMiseEnLigne);
        
        $model->article = ArticleGateway::postArticle($model->dataError,$article);
        
        $model->title = "mise à jour article fait";
        
        return $model;
                
    }
    
    public static function getModelArticlePut($titreArticle,$descritpion,$dateMiseEnLigne)
    {
        $model = new self(array());
        $article = ArticleFabrique::getArticle($model->dataErrors, Config::generateRandomId(),$titreArticle,$descritpion,$dateMiseEnLigne);
        
        $model->article = ArticleGateway::putArticle($model->dataError,$article);
     
        $model->title = "article a ete insere.";
        
        return $model;
    }
    
    public static function deleteArticle($id)
    {
        $model = new self(array());
        
        $model->article =ArticleGateway::deleteArticle($model->dataError,$id);
        
        $model->title = "article a ete supprime.";
        
        return $model;
    }
    
    
    
}

?>
