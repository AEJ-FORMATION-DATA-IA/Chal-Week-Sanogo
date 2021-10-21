<?php
//Update request
    //recuperer l'identifiant du livre et le mettre dans la variable bookId
    if (!empty($_GET['id_livre'])) {
        $bookId = htmlspecialchars($_GET['id_livre']);
    }

    //Quand on arrive sur la page (AFFICHER LES INFORMATIONS ACTUELLES)
    if(empty($_POST['update'])){

       require('model/current_val.php');

        $title=$bookValue['titre'];

        $author=$bookValue['auteur'];

        $descrip=$bookValue['description'];

        $date_par=$bookValue['date_de_parution'];

        $image=$bookValue['image_livre'];

        
    }else {

        //S'il y'a modification des informations du livre, faire la mise à jour.
        $newTitle = ($_POST['title']);
        $newAuthor = ($_POST['author']);        
        $newDesc = ($_POST['desc']);
        $newDate = ($_POST['parut']);
        $newPict = $_POST['img'];
        if(!empty($newTitle) AND !empty($newAuthor) AND !empty($newDesc) AND !empty($newDate)) {

           //Update request
        $modif = $bdd->prepare('UPDATE books SET titre=?, description=?, auteur=?, date_de_parution=? WHERE id_livre=? ');
        $modif->execute(array($newTitle,$newDesc,$newAuthor,$newDate,$bookId));

            header('Location: index.php');
        }
        else{
            $erreur='Veuillez remplir tous les champs ';
        }
    }