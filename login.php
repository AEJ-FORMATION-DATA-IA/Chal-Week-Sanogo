<?php
session_start();
require('model/db_conn.php');
require('controller/connect_user.php');
include('head.php');
?>

<body>
    <header class="">

    <nav class="disp-flex justify-between pad-10">
        <h1 class="navbar-brand text-white ft-size-18 ">GeekShop</h1>
        <div class="">
            <ul class="nav disp-inline-block">
                <li class="nav-item m-2 "><a href="register.php">S'inscrire</a></li>
            </ul>
        </div>
    </nav>
    </header>

<div class="d-flex text-center justify-content-center align-items-center height">
    <form action="" method="POST" class="border row">
         <h1 class="text-center">CONNEXION</h1>

         <!-- Reception du pseudo pour la connexion  -->
        <div class="m-2 ">
            <label for="pseudo" class="col-md-6">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" minlength="3" class="col-md-6"value='<?php echo $donnee['pseudo'] ?>'>
        </div>

        <!-- Mot de passe  -->
        <div class="m-2">
            <label for="mdp" class="col-md-6">Mot de passe </label>
            <input type="password" name="password" id="mdp" placeholder="***********" class="col-md-6">
        </div>

            <div class="m-2">
                <input type="submit" class="register-btn" name="login" value="Se connecter">
            </div>
                <?php if(isset($erreur))echo $erreur;?>
        </form>
</div>










    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
</body>

</html>