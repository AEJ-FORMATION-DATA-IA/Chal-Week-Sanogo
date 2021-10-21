<?php
require('db_conn.php');

//Enrégistrer un livre dans la base de donnée
$insert = $bdd->prepare('INSERT INTO books (titre, description, auteur, date_de_parution, image_livre) VALUES(?, ?, ?, ?, ?)');
$insert->execute(array($title, $descrip, $author, $date, $image));

//Enregistrer infos utilisateur
$inscription =$bdd->prepare('INSERT INTO owner(name, pass) VALUES(?,?)');
$inscription->execute(array($pseudo, $password)); 

