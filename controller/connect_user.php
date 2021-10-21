<?php
if(isset($_POST['login'])) {
    if (!empty($_POST['pseudo'] AND !empty($_POST['password']))) {
        $pseudo= htmlspecialchars($_POST['pseudo']);
        $mdp =sha1($_POST['password']);
        
      //Recuperation des données et rowcount pour voir si l'utilisateur est deja inscris
      require('model/recup_data.php');
  
      if ($exist==0) {
          $erreur= 'Pseudo ou mot de pass incorrect';
      }else{
          $_SESSION['pseudo']=$donnee['pseudo'];
          header('Location:index.php');
      }
  
    }else{
        $erreur = 'Veuillez remplir tous les champs.';
    }
  }