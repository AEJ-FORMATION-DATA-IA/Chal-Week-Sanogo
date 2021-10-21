3<?php 
session_start();
require('model/db_conn.php');
require('model/recup_data.php');
include('head.php');
?>

<body>
    <?php include('header.php');?>

    <div class="container bg-primary p-2 dashbord mt-5">
        <div class="disp-flex align-items-center justify-content-between">
            <h1 class="text-white"><strong>Livres ajoutés</strong> </h1><a href="insert.php" class="btn btn-success">Ajouter un livre<a>
        </div>
    </div>
    <div class="container border">
        <div class="container row">

            <?php 
            while($data=$booksInfos->fetch()){
                    echo '<div class="row border p-2 m-2">';
                        echo '<div class="col-md-6">';
                            echo '<h5 class="text-decoration-underline"> Titre: </h5><p>'.$data['titre'];
                            echo '<h5 class="text-decoration-underline"> Auteur: </h5><p>' .$data['auteur']. '</p>';
                            echo '<h5 class="text-decoration-underline"> Date de parution:</h5><p> '.$data['date_de_parution']. '</p>';
                            echo '<h5 class="text-decoration-underline"> Description:</h5><p> '.$data['description']. '</p>';
                            echo '<div><a href="update.php?id_livre='.$data['id_livre'].'" class="btn btn-primary">Modifier</a>
                            <a href="delete.php?id_livre='.$data['id_livre'].'" class="btn btn-danger">Suprimer</a>
                            </div>';
                            echo '</div>';
                            echo '<div class="col-md-6">';
                            echo '<img src="./Assets/images/'.$data['image_livre'].'" alt="'.$data['image_livre'].'" width="100%" height="auto">';
                    echo '</div>';
                    echo '</div>';}
                ?>
        </div>
    </div>

</body>

</html>