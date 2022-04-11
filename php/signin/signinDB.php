<?php 
                require_once('../connexion_bd.php');
                $connexion = connect_bd();
        //  Récupération de l'utilisateur et de son pass hashé
                $req = $connexion->prepare('SELECT ID, pass_word FROM users WHERE userName = :userName');
                $req->execute(array('userName' => $_POST['name']));
                $resultat = $req->fetch();

        // Comparaison du pass envoyé via le formulaire avec la base
                $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass_word']);

                if (!$resultat)
                {
                    echo "Erreur. Resultat non trouvé";
                }
                else
                {
                    if ($isPasswordCorrect) 
                    {
                        $_SESSION['ID'] = $resultat['ID'];
                        $_SESSION['name'] = $_POST['name'];
                        header('Location:../../blog/');
                        
                    }
                    else 
                    {
                        echo "Mot de passe incorrect";
                    }
                }
                ?>