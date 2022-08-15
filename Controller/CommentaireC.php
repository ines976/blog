<?php

require_once '../../config.php';
require_once '../../Model/commentaire.php';


Class commentaireC {

    function getAllcommentaires()
    {
        $requete = "select * from commentaire";
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

    function affichercommentaire($page_first_result,$results_per_page)
    {
        $requete = "select * from commentaire LIMIT ".$page_first_result.','.$results_per_page;
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

    function searchcommentaire($sh)
    {
        $requete = "select * from commentaire where id_post like '%".$sh."%' or text like '%".$sh."%' ";
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


    function getcommentairebyID($id)
    {
        $requete = "select * from commentaire where id=:id";
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

    function ajoutercommentaire($commentaire)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                INSERT INTO commentaire
                (id_post,subject,text)
                VALUES
                (:id_post,:subject,:text)
                ');
            $querry->execute([
                'id_post'=>$commentaire->getId_post(),
                'text'=>$commentaire->getText()
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function modifiercommentaire($commentaire)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                UPDATE commentaire SET
              id_post=:id_post,text=:text

                where id=:id
                ');
            $querry->execute([
                'id'=>$commentaire->getId(),
                'id_post'=>$commentaire->getId_post(),
                'text'=>$commentaire->getText()
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }



    function supprimercommentaire($id)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                DELETE FROM commentaire WHERE id =:id
                ');
            $querry->execute([
                'id'=>$id
            ]);

        } catch (PDOException $th) {
            $th->getMessage();
        }
    }


    function getcommentaire($id){
        $requete="select * from commentaire where id=:id   ";
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
