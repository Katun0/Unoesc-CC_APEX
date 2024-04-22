<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['pass']))
    {
        // Acessa
        include_once('connection.php');

        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM ekkoLogin WHERE user_login = '$user' and user_pass = '$pass'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['user']);
            unset($_SESSION['pass']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            header('Location: home.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>