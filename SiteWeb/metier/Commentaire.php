<?php

require_once(dirname(__FILE__).'/CommentairePropertiesTrait.php');

class Commentaire
{
    

        protected $id;

        protected $description;
        protected $auteur;
        protected $dateMiseEnLigne;
        
        protected $idArticle;
        
        
        use CommentaireProperties;
    
    public function __construct($id, $description="", $dateMiseEnLigne="",$auteur="",$idArticle)
    {
        
        
        $this -> setDescription($description);
        $this -> setDateMiseEnLigne($dateMiseEnLigne);
        $this -> setId($id);
        $this -> setAuteur($auteur);
         $this -> setIdArticle($idArticle);
        
    }
    
  

        public static function getDefaultCommentaire(){
        $commentaire = new commentaire('0', 'Ma descritpion', '00/00/0000',"auteur","0");
        $commentaire->id="";
        $commentaire->dateMiseEnLigne ="";
        $commentaire->description="";
        $commentaire->auteur="";
        $commentaire->idArticle="";
        return $commentaire;
        
    }
    
    public function toHTML()
    {
        
    }
}
        
        
?>
