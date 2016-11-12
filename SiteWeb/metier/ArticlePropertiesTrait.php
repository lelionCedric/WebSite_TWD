<?php

trait ArticleProperties
{
	public function getDescription() {
		return $this->description;		
	}	

	public function getDateMiseEnLigne() 
	{
		return $this->dateMiseEnLigne;	
	}
        
        public function getTitreArticle() 
	{
		return $this->titreArticle;	
	}
        public function getId() 
	{
		return $this->id;	
	}
	
        
        function getCommentaires() {
            return $this->commentaires;
        }

        function setCommentaires($commentaires) {
            if(!is_array($commentaires))
            {
                throw new \Exception("erreur : je sais pas ");
            }
            $this->commentaires = $commentaires;
        }

        public function setId($id)
        {
            $this->id = empty($id) ? "" : $id;
        }
        
        public function setTitreArticle($titreArticle)
        {
            $this->titreArticle = empty($titreArticle) ? "" : $titreArticle;
        }
        
	public function setDescription($description) 
	{
                /* pas besoinde controle, seul l'administateur ajoute des aricles*/
                
                $this->description = empty($description) ? "" : $description;	
	}
	public function setDateMiseEnLigne($dateMiseEnLigne) 
	{
                /* pas besoinde controle, seul l'administateur ajoute des aricles*/
		
                $this ->dateMiseEnLigne = empty($dateMiseEnLigne) ? "" : $dateMiseEnLigne;	
	}
	
        public function addCommentaire($id, $com)
        {
            if(!empty($com))
            {
                if(!is_array($this->commentaires)){
                    $this -> commentaire =array();
                }
                $this->commentaires['id'] = new Commentaire($id,$description,$dateMiseEnLigne,$auteur);
            }else{
                throw new Exception('Erreur: article invalide');
            }
        }
        
        public function removeCommentaire($id)
        {
            if(!empty($this->commentaire[$id])){
                unset($this->telephone[$id]);
            }
        }
}
?>