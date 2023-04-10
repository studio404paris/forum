<?php

require 'actions/database.php';
//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérification que les champs ont étés remplis par l'utilisateur
    if(!empty($_POST['pseudo']) && !empty($_POST['lastName']) && !empty($_POST['firstName'])  && !empty($_POST['password'])){
        // les données de l'user 
         $user_pseudo = htmlspecialchars($_POST['pseudo']);
         $user_lastname = htmlspecialchars($_POST['lastName']);
         $user_firstname = htmlspecialchars($_POST['firtName']);
         $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
       
         // verifier si l'user existe deja      
        $checkIfUserAlreadyExists = $bdd -> prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists -> execute(array($user_pseudo));
        
        // Insérer l'user dans la base de données 
        if($checkIfUserAlreadyExists -> rowCount() == 0){
            $insertUserOnWebsite = $bdd-> prepare('INSERT INTO users(pseudo, nom, prenom, mdp)VALUES(?,?,?,?)');
            $insertUserOnWebsite -> execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password));
        //Récupérer les infos de l'user
            $getInfosOfThisUserReq = $bdd -> prepare('SELECT id, pseudo, nom, prenom FROM users WHERE pseudo = ? AND nom = ? AND prenom = ?');
            $getInfosOfThisUserReq -> execute(array($user_lastname, $user_firstname, $user_pseudo));

            $usersInfos = $getInfosOfThisUserReq -> fetch();
        // Authenntification de l'user sur le site et stocker ces données dans de variables de session
            $_SESSION ['auth'] = true;
            $_SESSION ['id'] = $usersInfos['id'];
            $_SESSION ['lasname'] = $usersInfos['pseudo'];
            $_SESSION ['lastname'] = $usersInfos['nom'];
            $_SESSION ['firstname'] = $usersInfos['prenom'];
        // Redirection vers la page d'accueil
            header('Location: index.php');

        }else{
            $errorMsg = "L'utilisateur existe déjà";
        }

    }else{
        $errorMsg = "Veuillez remplir tous les champs";
    }
}