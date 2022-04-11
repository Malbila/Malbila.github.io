<?php 
require_once('../connexion_bd.php');
$connexion = connect_bd();
//  Récupération de l'utilisateur et de son pass hashé
$req = $connexion->query('SELECT * FROM articles');
$resultat = $req->fetch();
//cho $req;
echo $resultat['title'];
?> 
    <p> <?php echo $resultat['body']; ?></p>
    <span> <?php echo 'Le '.$resultat['createdAt']; ?></span>

