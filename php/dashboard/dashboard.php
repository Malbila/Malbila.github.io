<?php
    require_once('../connexion_bd.php');
    $connexion = connect_bd();
    $req = $connexion->prepare('INSERT INTO articles (category, title, body, cover, createdAt, updatedAt) VALUES (?,?,?,?,Now(), Now())');
    $req->execute(array($_POST['category'], $_POST['titre'], $_POST['body-content'], $_POST['cover']));
    header('Location:./');
?>