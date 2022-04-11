<?php
    $correct_pass_word = ($_POST['pass'] == $_POST['passconf']);
    $exist_pass = (isset($_POST['pass']) AND isset($_POST['passconf']));
    if(isset($_POST['name']) AND $exist_pass AND $correct_pass_word)
    {
        require_once('../connexion_bd.php');
        $connexion = connect_bd();
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $req = $connexion->prepare('INSERT INTO users (userName, pass_word) VALUES (?,?)');
        $req->execute(array($_POST['name'], $pass));
        header('Location:../../');
    }
    else
    { 
        header('Location:../');
    }
?>