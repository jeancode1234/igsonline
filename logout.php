<?php
    session_start();
if (isset($_POST["submit"])) {

    session_destroy();

    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION["message"] ="logout successful";
    header("location:login.php");
    exit(0);
}

?>