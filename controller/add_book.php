<?php
 //Quand le bouton ajouter un produit est actionné
 if(isset($_POST['add'])){
    if(!empty($_POST['title']) AND !empty($_POST['descrip']) AND !empty($_POST['author']) AND !empty($_POST['date_paru']) AND !empty($_POST['book_img']) ){

        $title=htmlspecialchars($_POST['title']);
        $descrip=$_POST['descrip'];
        $author=$_POST['author'];
        $date=$_POST['date_paru'];
        $image=$_POST['book_img'];

        require('model/insert_data.php');
        header('Location:index.php');
        
    }else{
        echo $erreur = 'Veuillez remplir tous les champs ';
    }
}