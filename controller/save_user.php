<?php
//Si on clique sur le bouton s'inscrire 
if(isset($_POST['register'])) {

    //Verifier que tous les champs sont remplis
    if (!empty($_POST['pseudo']) AND !empty($_POST['password']) AND !empty($_POST['password_confirm'])) {

        //creation de variable pour les entrées 
        $pseudo=htmlspecialchars($_POST['pseudo']);
        $password=sha1($_POST['password']);
        $password_conf=sha1($_POST['password_confirm']);

        //Verifier que les mots de passe sont identique
            if($_POST['password']==$_POST['password_confirm']){

                //Envoyer les infos dans la base de donnée
                $inscription =$bdd->prepare('INSERT INTO owner(name, pass) VALUES(?,?)');
                $inscription->execute(array($pseudo, $password));               

                //Rediriger vers la page de connexion.
                header('Location: login.php');
            }else{
                $erreur= 'Les mots de passe ne correspondent pas';
            }
    }else{
        $erreur = 'Veuillez remplir tous les champs!';
    }
}