<?php
session_start();

//Connexion a la base de donnée
require('model/db_conn.php');
require('controller/update.php');     
include('head.php');
?>



<body>

    <!-- La barre de navigation  -->
    <?php include('header.php');?>
<div>
    <div class="row">
        <div class="col-md-6">
                            <!-- Le formulaire  -->
                            <form action="" method="POST" class="border full-width">
                    <h1 class="text-center bg-secondary text-white p-2">Modifier les informations du livre</h1>

                    <!-- Le titre du livre à modifier  -->
                    <div class="m-2 row">
                        <label for="title" class="ft-size-18 col-md-6">Modifier le titre du livre </label>
                        <input type="text" name="title" id="title" placeholder="Modifier le nom du livre" minlength="3"
                            class="full-widh col-md-6" value="<?php echo $title ?>">
                    </div>

                    <!-- L'auteur du livre à modifier  -->
                    <div class="m-2 row">
                        <label for="auth" class="ft-size-18 col-md-6">Modifier l'auteur du livre </label>
                        <input type="text" name="author" id="auth" placeholder="Modifier l'auteur"
                            class="full-widt col-md-6" value="<?php echo $author ?>">
                    </div>

                    <!-- La date de parution  -->
                    <div class="m-2 row">
                        <label for="parut" class="ft-size-18 col-md-6">Modifier la date de parution </label>
                        <input type="date" name="parut" id="parut" class="full-widt col-md-6"
                            value="<?php echo $date_par ?>">
                    </div>

                    <!-- La description du livre à modifier  -->
                    <div class="m-2 row">
                        <label for="desc" class="ft-size-18 col-md-6">Modifier la description </label>
                        <input type="text" name="desc" id="desc" placeholder="Modifier la description"
                            class="full-widt col-md-6" value="<?php echo $descrip ?>">
                    </div>

                    <div class="m-2 row">
                        <label for="img" class="ft-size-18 col-md-6">Modifier l'image </label>
                        <input type="file" name="img" id="img" class="full-widt col-md-6" value="<?php echo $image?>">
                    </div>


                    <!-- Le bouton enregistrer  -->
                    <div class="m-2">
                        <input type="submit" class="register-btn btn btn-success" name="update" value="Enregister">
                        <a href="index.php" class="btn btn-secondary">Retour</a>
                    </div>

                    <!-- Le message d'erreur  -->
                    <?php 
                        if(isset($erreur)){
                        echo '<p class="alert bg-warning mt-3">'.$erreur . '</p>';}
                     ?>
                </form>
        </div>
        <div class="col-md-6 border">
            <img src="<?php echo './Assets/images/'.$image?>" alt="" width="100%" height="90%">
            <h3>IMAGE : <?php echo $image?> </h3>
        </div>
    </div>
</div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
</body>

</html>