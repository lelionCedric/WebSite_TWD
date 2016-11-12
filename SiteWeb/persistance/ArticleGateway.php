<?php

class ArticleGateway{
    public static function getArticleById(&$dataError, $id)
    {
        $article =null;
        if(isset($id))
        {
            try
            {
                $statement = DataBaseManager::getInstance()->prepareAndExecuteQuery(
                        'SELECT * FROM Article WHERE id = ?',array($id));
            } catch (Exception $ex) {
                echo "impossible d'acceder aux données.";
                $dataError['requete'] ="Imossible d'acceder aux données.";
                        
            }
            
            if($statement !== false)
            {
                $count = 0;
                foreach($statement as $row){
                    $count++;
                    $article =ArticleFabrique::getArticle($dataError,$row['id'],$row['titreArticle'],$row['description'],$row['dateMiseEnLigne']);
                }
                if($count != 1)
                {
                    $dataError['persistance-get'] = "Article introuveable";
                }
            }else
             {
                 $dataError['persistance-get'] = "Article introuveable";
             }
        }else
        {
            $dataError['persistance-get'] = "Impossible d'acceder aux données.";
        }
        return $article;
            
        }
 
        
        public static function getArticleAll(&$dataError)
        {
            try{
                $statement = DataBaseManager::getInstance()->prepareAndExecuteQuery(
                        'SELECT * FROM Article',array());
            } catch (Exception $ex) {
                $dataError['persistance-get'] = "Impossible d'acceder aux données.";
            }
            
            $collectionArticle = array();
            
            if($statement !==false){
                
                foreach($statement as $row)
                {
                    $article = ArticleFabrique::getArticle($dataError,$row['id'],$row['titreArticle'],$row['description'],$row['dateMiseEnLigne']);
                    $collectionArticle[] = $article;
                }
                
                
            }else{
                $dataError['persitance-get'] = "Aucune article trouvé";     
            }
            
            DataBaseManager::destroyQueryResults($statement);
            return $collectionArticle;
        }
        
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
        
        public static function putArticle(&$dataError,$article){
            $statement = false;
            
            $count =0;
            
            while ($statement === false && $count<=3)
            {
                $article->setId(Config::generateRandomId());
                $count++;
                $statement = DataBaseManager::getInstance()->prepareAndExecuteQuery(' 
                        INSERT INTO Article(id, titreArticle, description, dateMiseEnLigne) VALUES(? ,? ,?, ?)',array($article->getId(),$article->getTitreArticle(),$article->getDescription(),$article->getDateMiseEnLigne())
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
            return $article;
        }
        
        
        public static function deleteArticle(&$dataError, $id)
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
