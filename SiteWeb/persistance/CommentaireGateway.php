<?php
require_once (dirname(__FILE__).'/DataBaseManager.php');
require_once (dirname(__FILE__).'/../metier/CommentaireFabrique.php');
class CommentaireGateway{
    public static function getCommentaireById(&$dataError, $id)
    {
        $commentaire =null;
        if(isset($id))
        {
            try
            {
                $statement = DataBaseManager::getInstance()->prepareAndExecuteQuery(
                        'SELECT * FROM commentaire WHERE id = ?',array($id));
            } catch (Exception $ex) {
                echo "impossible d'acceder aux données.";
                $dataError['requete'] ="Imossible d'acceder aux données.";
                        
            }
            
            if($statement !== false)
            {
                $count = 0;
                foreach($statement as $row){
                    $count++;
                    $commentaire = CommentaireFabrique::getCommentaire($dataError, $row['id'], $row['auteur'],$row['description'] ,$row['dateMiseEnLigne']);
                }
                if($count != 1)
                {
                    $dataError['persistance-get'] = "Commentaire introuveable";
                }
            }else
             {
                 $dataError['persistance-get'] = "Commentaire introuvable";
             }
        }else
        {
            $dataError['persistance-get'] = "Impossible d'acceder aux données.";
        }
        return $commentaire;
            
        }
 
        public static function getArticleAllByIdArticle(&$dataError,$idArticle)
        {
            try{
                $statement = DataBaseManager::getInstance()->prepareAndExecuteQuery(
                        'SELECT * FROM Commentaire WHERE idArticle= ? ',array($idArticle));
            } catch (Exception $ex) {
                $dataError['persistance-get'] = "Impossible d'acceder aux données.";
            }
            
            $collectionCommentaire = array();
            
            if($statement !==false){
                
                foreach($statement as $row)
                {
                    $commentaire = CommentaireFabrique::getCommentaire($dataError, $row['id'], $row['auteur'],$row['description'] ,$row['dateMiseEnLigne'], $row['idArticle']);
                    $collectionCommentaire[] = $commentaire;
                }
                
                
            }else{
                $dataError['persitance-get'] = "Aucune commentaire trouvé";     
            }
            
            DataBaseManager::destroyQueryResults($statement);
            return $collectionCommentaire;
        }
        
        public static function getArticleAll(&$dataError)
        {
            try{
                $statement = DataBaseManager::getInstance()->prepareAndExecuteQuery(
                        'SELECT * FROM Commentaire',array());
            } catch (Exception $ex) {
                $dataError['persistance-get'] = "Impossible d'acceder aux données.";
            }
            
            $collectionCommentaire = array();
            
            if($statement !==false){
                
                foreach($statement as $row)
                {
                    $commentaire = CommentaireFabrique::getCommentaire($dataError, $row['id'], $row['auteur'],$row['description'] ,$row['dateMiseEnLigne'],$row['idArticle']);
                    $collectionCommentaire[] = $commentaire;
                }
                
                
            }else{
                $dataError['persitance-get'] = "Aucune commentaire trouvé";     
            }
            
            DataBaseManager::destroyQueryResults($statement);
            return $collectionCommentaire;
        }
        /*
        public static function postArticle($dataError,$article){
            $statement = DataBaseManager::getInstance()->prepareAndExecuteQuery('
                    UPDATE Article SET titreArticle=?, description=?, dateMiseEnLigne=?'.'WHERE id=?',array($article->getTitreArticle(),$article->getDescription(),$article->getDateMiseEnLigne(),$article->getId())
                    );
        
            if($statement === false)
            {
                $dataError['persistance-put'] = "Probleme execution requete";
            }
            
            DataBaseManager::destroyQueryResults($statement);
            return $article;
        }
        */
        public static function putCommentaire(&$dataError,$commentaire){
            $statement = false;
            
            $count =0;
            
            while ($statement === false && $count<=3)
            {
                $commentaire->setId(Config::generateRandomId());
                $count++;
                $statement = DataBaseManager::getInstance()->prepareAndExecuteQuery(' 
                        INSERT INTO Commentaire(id, auteur, description, dateMiseEnLigne, idArticle) VALUES(? ,? ,?, ?, ?)',array($commentaire->getId(),$commentaire->getAuteur(),$commentaire->getDescription(),$commentaire->getDateMiseEnLigne(),$commentaire->getIdArticle())
                        );
                
                if($statement->rowCount()<1)
                {
                    $statement = false;
                }
                
        }
        
        if($statement ===false)
        {
            $dataError['persistance-put'] = "preobleme d'exectuion de la requete";
        }else{
            DataBaseManager::destroyQueryResults($statement);
        }
            return $commentaire;
            
        }
        
        
        public static function deleteCommentaire(&$dataError, $id)
        {
            
            $article = self::getArticleById($dataError, $id);
            
            if(empty($dataError)){
                $statement = DataBaseManager::getInstance()->prepareAndExecuteQuery(
                        'DELETE FROM Article WHERE id=?',array($id));
            
                if ($statement===false)
                {
                    $dataError["persistance-delete"]="probleme d'execution de la requete";
                }
                
                DataBaseManager::destroyQueryResults($statement);
            }
            
            return $article;
        }
        
}

?>
