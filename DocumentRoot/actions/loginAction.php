<?php

require('actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérification que les champs ont étés remplis par l'utilisateur
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
        // les données de l'user 
         $user_pseudo = htmlspecialchars($_POST['pseudo']);
         $user_password = htmlspecialchars($_POST['password'], PASSWORD_DEFAULT);
        //verifie que l'user existe 
         $checkIfUserExists = $bdd-> prepare('SELECT * FROM users WHERE pseudo = ?');
         $checkIfUserExists->execute(array($user_pseudo));
       //recuperer les infos de l'user
         if($checkIfUserExists-> rowCount() > 0){
            $userIfos = $checkIfUserExists->fetch(); 
            
            if(password_verify($user_password, $userIfos['mdp'])){
                $_SESSION ['auth'] = true;
                $_SESSION ['id'] = $usersInfos['id'];
                $_SESSION ['lasname'] = $usersInfos['pseudo'];
                $_SESSION ['lastname'] = $usersInfos['nom'];
                $_SESSION ['firstname'] = $usersInfos['prenom'];
            // Redirection vers la page d'accueil
                header('Location: index.php');
    
            }else
            {
                $errorMsg = "Oops votre mot de passe est incorrect";
            }


         }else
            {
                $errorMsg = "Oops l'utilisateur n'existe pas ...";
            }

        }else{
            $errorMsg = "L'utilisateur existe déjà";
        }

    }
