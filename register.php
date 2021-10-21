<?php
require('model/db_conn.php');
require('controller/save_user.php');
include('head.php');
?>

<body>

<!-- La barre de navigation  -->
<header class="">
        
        <nav class="d-flex justify-content-between pad-10">
            <h1 class="navbar-brand text-white ft-size-18 ">GeekShop</h1>
            <div class="">
                <ul class="nav disp-inline-block">
                    <li class="nav-item m-2 "><a href="login.php">Se connecter</a></li>
                </ul>
            </div>
        </nav>
</header>
    <!-- La div contenant le formulaire  -->
    <div class="d-flex justify-content-center flex-column align-items-center ">

    <!-- Formulaire  -->
        <form action="" method="POST" class="border">
            <h1 class="text-center">INSCRIPTION</h1>

            <!-- Le champ pseudo  -->
            <div class="m-2 row">
                <label for="pseudo" class="col-md-6">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" class="full-width col-md-6">
            </div>

            <!-- Le champ mot de passe  -->
            <div class="m-2 row">
                <label for="mdp" class="col-md-6">Mot de passe </label>
                <input type="password" name="password" id="mdp" placeholder="**********" class="full-width col-md-6">
            </div>

            <!-- Le champ confirmation de mot de passe  -->
            <div class="m-2 row">
                <label for="mdp" class="col-md-6">Confirmer le mot de passe </label>
                <input type="password" name="password_confirm" id="mdp" placeholder="**********" class="full-width col-md-6">
            </div>

            <!-- Le bouton s'incrire  -->
            <div class="text-center m-5">
            <input type="submit" class=" btn btn-success" name="register" value="S'inscrire">
            </div>
        </form>

        <!-- Le message d'erreur  -->
        <p>
            <?php 
            if(isset($erreur)){
                echo $erreur;
            }
            ?>
        </p>
    </div>










    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
</body>

</html>