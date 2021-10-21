<?php
 //Recuperer l'élément dans la base de donnée qui à l'ID recuperé
 $current_value = $bdd->prepare('SELECT titre, description, auteur, date_de_parution, image_livre FROM books WHERE id_livre=?');
 $current_value->execute(array($bookId));
 $bookValue = $current_value->fetch();