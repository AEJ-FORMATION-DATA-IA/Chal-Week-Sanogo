<?php
session_start();
require('model/db_conn.php');
require('controller/add_book.php');
include('head.php');
?>

<body>
 <?php include('header.php');?>

    <!-- La div contenant le formulaire -->
    <div class="mt-5 container">

        <!-- Le formulaire  -->
        <form action="" method="POST" class="border row full-width">
            <h1 class="text-center bg-secondary text-white p-2">Ajouter un livre</h1>

            <!-- le nom du produit  -->
            <div class="m-2 row">
                <label for="title" class="ft-size-18 col-md-6">Titre</label>
                <input type="text" name="title" id="title" placeholder="Ajouter le titre du livre"
                    minlength="3" class="full-width col-md-6">
            </div>

            <!-- La quantite minimale -->
            <div class="m-2 row">
                <label for="desc" class="ft-size-18 col-md-6">Description </label>
                <input type="text" name="descrip" id="desc" placeholder="Ajouter une description au livre" class="full-width col-md-6">
            </div>

            <!-- La quantite en stock -->
            <div class="m-2 row">
                <label for="auth" class="ft-size-18 col-md-6">Auteur </label>
                <input type="text" name="author" id="auth" placeholder="Nom de l'auteur" class="full-width col-md-6">
            </div>
            <!-- La quantite en stock -->
            <div class="m-2 row">
                <label for="date" class="ft-size-18 col-md-6">Date de parution </label>
                <input type="Date" name="date_paru" id="date"class="full-width col-md-6">
            </div>
            <!-- La quantite en stock -->
            <div class="m-2 row">
                <label for="img" class="ft-size-18 col-md-6">Image </label>
                <input type="file" name="book_img" id="img"class="full-width col-md-6">
            </div>

            <!-- Le bouton ajouter le produit  -->
            <div class="m-2">
                <input type="submit" class="register-btn btn-success" name="add" value="Ajouter le livre">
            </div>
        </form>

        <!-- Le message d'erreur -->
        <?php 
             if(isset($erreur))
                    echo '<p class="alert bg-warning mt-3">'.$erreur . '</p>';
        ?>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
</body>

</html>