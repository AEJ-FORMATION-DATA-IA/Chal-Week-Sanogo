<?php

if (!empty($_GET['id_livre'])){
    $bookId= htmlspecialchars($_GET['id_livre']);
    }
if (isset($_POST['yes'])) {         
    require('model/recup_data.php');
    header('Location: index.php');

}else if(isset($_POST['no'])){

    header('Location: index.php');
    }