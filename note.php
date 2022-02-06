<?php
    require_once('../tests/Company/connexion_bd.php');
    $connexion = connect_bd();
    $req = $connexion->prepare('INSERT INTO suggestions (Pseudo, Suggestion, Date_sug) VALUES ("Lepir@te",?,Now())');
    $req->execute(array($_POST['note']));
    header('Location:lesson-1.html');
?>
?>