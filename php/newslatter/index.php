<?php 
    require_once('../connexion_bd.php');
    $connexion = connect_bd();
    $req = $connexion->prepare('INSERT INTO newsletter (full_name, mail, subscription) VALUES (?,?,Now())');
    $req->execute(array($_POST['nom'], $_POST['mail']));
    header('Location:../../blog/');
?>