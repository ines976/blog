<?php

include_once '../config.php';
include_once '../entities/commentaire.php';


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
                (id_post,user,text)
                VALUES
                (:id_post,:user,:text)
                ');
            $querry->execute([
                'id_post'=>$commentaire->getIdPost(),
                'user'=>$commentaire->getUser(),
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
              id_post=:category,id_user=:subject,text=:text

                where id=:id
                ');
            $querry->execute([
                'id'=>$commentaire->getId(),
                'category'=>$commentaire->getIdPost(),
                'subject'=>$commentaire->getIdUser(),
                'text'=>$commentaire->getText()
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function modifierEtat($id,$etat)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
                UPDATE commentaire SET
              etat=:etat
                where id=:id
                ');
            $querry->execute([
                'id'=>$id,
                'etat'=>$etat
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function approuverCommentaire($id)
    {
        try {
            $querry = $config->prepare('
                UPDATE commentaire SET
              etat=:etat
                where id=:id
                ');
            $querry->execute([
                'id'=>$id,
                'etat'=>'Approved'
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function refuserCommentaire($id)
    {
        try {
            $querry = $config->prepare('
                UPDATE commentaire SET
              etat=:etat
                where id=:id
                ');
            $querry->execute([
                'id'=>$id,
                'etat'=>'Rejected'
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
