<?php

//Recuperer les information sur les livres et les afficher sur index.php
$booksInfos= $bdd->prepare('SELECT * FROM books ORDER BY id_livre DESC');
$booksInfos->execute();

//supprimer un livre

$suprim=$bdd->prepare('DELETE FROM books WHERE id_livre =?');
$suprim->execute(array($bookId));

//Recuperer les informations de connexion 

    $recup = $bdd->prepare('SELECT * FROM owner WHERE name =? AND pass=?');
    $recup->execute(array($pseudo, $mdp));
    $donnee = $recup->fetch();
    $exist = $recup->rowCount();

//Recuperer l'élément dans la base de donnée qui à l'ID recuperé
$current_value = $bdd->prepare('SELECT titre, description, auteur, date_de_parution, image_livre FROM books WHERE id_livre=?');
$current_value->execute(array($bookId));
$bookValue = $current_value->fetch();
