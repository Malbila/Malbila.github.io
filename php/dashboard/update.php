<?php
    require_once('../connexion_bd.php');
    $connexion = connect_bd();

    $reqQuery = $connexion->query('SELECT * FROM articles WHERE id = 3');
    $resultat = $reqQuery->fetch();

   
    $category = (isset($_POST['category']) AND $_POST['category'] != '') ? $_POST['category'] : $resultat['category'];
    $title = (isset($_POST['titre']) AND $_POST['titre'] != '')?$_POST['titre']:$resultat['title'];
    $body = (isset($_POST['body-content']) AND $_POST['body-content'] != '')?$_POST['body-content']:$resultat['body'];
    

    $req = $connexion->prepare('UPDATE articles SET category=:category, title=:title, body=:body, updatedAt=Now() WHERE id=3');
    $req->execute(['category' => $category, 'title' => $title, 'body' => $body]);
    header('Location:./');
?>