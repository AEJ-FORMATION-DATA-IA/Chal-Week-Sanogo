<?php
session_start();
require('model/db_conn.php');
require('controller/del_book.php');        
include('head.php');
?>

<body>

    <!-- La barre de navigation  -->
    <?php include('header.php');?>

    <div class="container">
        <div class="disp-flex p-3 mt-5 bg-orange rounded-2">
            <h3 class="bg-warning ">Voulez-vous vraiment supprimer ce livre ?</h3 >
            <form action="" method="POST" class="ml-10">
                <input type="submit" name="yes" value="Oui" class="del-btn bg-success text-white">
                <input type="submit" name="no" value="Non" class="del-btn bg-danger text-white">
            </form>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
</body>

</html>