<?php

require_once '../../config.php';
require_once '../../Model/article.php';


Class articleC {

    function getAllarticles()
    {
        $requete = "select * from article";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function afficherarticle($page_first_result,$results_per_page)
    {
        $requete = "select * from article LIMIT ".$page_first_result.','.$results_per_page;
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function searchArticle($sh)
    {
        $requete = "select * from article where category like '%".$sh."%' or subject like '%".$sh."%' or text like '%".$sh."%' ";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result ;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }


    function getarticlebyID($id)
    {
        $requete = "select * from article where id=:id";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'id'=>$id
                ]
            );
            $result = $querry->fetch();
            return $result ;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function ajouterarticle($article)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                INSERT INTO article
                (category,subject,text)
                VALUES
                (:category,:subject,:text)
                ');
            $querry->execute([
                'category'=>$article->getCategory(),
                'subject'=>$article->getSubject(),
                'text'=>$article->getText()
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function modifierarticle($article)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                UPDATE article SET
              category=:category,subject=:subject,text=:text

                where id=:id
                ');
            $querry->execute([
                'id'=>$article->getId(),
                'category'=>$article->getCategory(),
                'subject'=>$article->getSubject(),
                'text'=>$article->getText()
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }



    function supprimerarticle($id)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                DELETE FROM article WHERE id =:id
                ');
            $querry->execute([
                'id'=>$id
            ]);

        } catch (PDOException $th) {
            $th->getMessage();
        }
    }


    function getarticle($id){
        $requete="select * from article where id=:id   ";
        $config= config::getConnexion();
        try{
            $query=$config->prepare($requete);
            $query->execute(
                [
                    'id'=>$id,

                ]);
            $result=$query->fetchAll();
            return $result;
        }catch (PDOException $e)
        {$e->getMessage();}
    }



}
