<?php

trait CommentaireProperties
{
	public function getDescription() {
		return $this->description;		
	}	

	public function getDateMiseEnLigne() 
	{
		return $this->dateMiseEnLigne;	
	}
    
        public function getId() 
	{
		return $this->id;	
	}
        public function getIdArticle() 
	{
		return $this->idArticle;	
	}
        
        function getAuteur() {
            return $this->auteur;
        }

         function setAuteur($auteur) {
               $this->auteur = $auteur;
         }
	
        public function setId($id)
        {
            
            //generation auto de l'id: je pense donc je suis
            $this->id = empty($id) ? "" : $id;
        }
        public function setIdArticle($idArticle)
        {
            
            //generation auto de l'id: je pense donc je suis
            $this->idArticle = empty($idArticle) ? "" : $idArticle;
        }
        
	public function setDescription($description) 
	{
                //VERIFICATION A FAIRE !!!!! REGARDER POLY !!!
            
            
                //throw new Exception("Erreur, le login doit comporté au plus 8 caractere"."(alpha ou num)");
	
                $this->description = empty($description) ? "" : $description;	
	}
	public function setDateMiseEnLigne($dateMiseEnLigne) 
	{
                //PEUT ETRE VERIFICATION A FAIRE SI LA DATE EST ENRE PAR L UTILISATEUR SI AUTO ET DONC PAS DE VERIF
		
                $this ->dateMiseEnLigne = empty($dateMiseEnLigne) ? "" : $dateMiseEnLigne;	
	}
	
}
?>