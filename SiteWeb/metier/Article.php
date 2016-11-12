<?php


    require_once(dirname(__FILE__).'/ArticlePropertiesTrait.php');
    require_once(dirname(__FILE__).'/Commentaire.php');
    
    class Article
    {
        
        protected $id;
        
        protected $titreArticle;

        protected $description;
        
        protected $dateMiseEnLigne;
        
        //tableau de commentaire;
        protected $commentaires;
        

    use ArticleProperties;
    
    public function __construct($id,$titreArticle="", $description="", $dateMiseEnLigne="",$commentaires="")
    {
        
        $this -> setTitreArticle($titreArticle);
        $this -> setDescription($description);
        $this -> setDateMiseEnLigne($dateMiseEnLigne);
        $this -> setId($id);
        
        //$this -> setCommentaires($array);
        
    }
    
    
    public static function getDefaultArticle(){
        $article = new Article('0','Titre', 'Ma descritpion', '00/00/0000',null);
        $article->id="";
        $article->dateMiseEnLigne ="";
        $article->description="";
        $article->titreArticle="";
        $article->commentaires=array();
        return $article;
        
    }
    
    }

?>

