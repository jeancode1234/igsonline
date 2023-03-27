<?php
if (isset($_POST["submit"])) {

    session_destroy();

    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION['message'] ="Déconnexion reussie";
    header("Location: login.php");
    exit(0);
}

?>