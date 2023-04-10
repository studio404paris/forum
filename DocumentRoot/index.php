<?php require_once('actions/signupAction.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

if(isset($successMsg)){
    echo '<div class="alert alert-success" role="alert">'.$successMsg.'</div>';
}
    ?>
    <h1>Prout</h1>
</body>
</html>