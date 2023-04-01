<?php

require 'actions/database.php';

if(isset($_POST['validate'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['pseudo'])){

    }else{
        $errorMsg = "Veuillez remplir tous les champs";
    }
}