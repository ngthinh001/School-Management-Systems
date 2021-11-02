<?php session_start();
    if (!isset($_SESSION['username'])  ) {
        header('Location: ../Log/login.php');
    } ?>

<?php include('../sql/connect.php') ?>
<?php include('hearder.php') ?>

<?php include('footer.php') ?>