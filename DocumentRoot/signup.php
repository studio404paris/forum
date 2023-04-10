<?php  include 'actions/signupAction.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<?php include 'includes/navbar.php'; ?>
<body class="bg-dark">
    <section class="container">
        <div class="row m-5  p-5 bg-light arrondi_card animate__animated animate__bounceInDown">
            <div class="mb-3 d-flex justify-content-center ">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets6.lottiefiles.com/datafiles/eAbFb2vqjxlD8oV/data.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"    autoplay></lottie-player> 
            </div>
            <div class="mb-3 text-center ">
                <hr class="hr" />
                <h1 class="font-weight-bold ">Inscription</h1>
                <p>Enregistrez vous pour pouvoir acceder à nos services</p>
                <hr class="hr" />
            </div>
            <form class="text-center" method="POST">
                <?php 
                    if(isset($errorMsg)){
                        echo '<div class="alert alert-danger" role="alert">'.$errorMsg.'</div>';
                    }

                ?>
                <div class="mb-3 m-2">
                    <label for="exampleInputEmail1" class="form-label h5">Pseudo</label>
                    <input type="text" class="form-control" name="pseudo">
                </div>
                <div class="mb-3 m-2">
                    <label for="exampleInputEmail1" class="form-label h5">Nom</label>
                    <input type="text" class="form-control" name="lastName">
                </div>
                <div class="mb-3 m-2">
                    <label for="exampleInputEmail1" class="form-label h5">Prénom</label>
                    <input type="text" class="form-control" name="firstName">
                </div>
                <div class="mb-3 m-2">
                    <label for="exampleInputPassword1" class="form-label h5">Mot de passe</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn_valider m-2" name="validate">S'inscrire</button>
                <a href="login.php" class="grow" >
                    <p>J'ai déjà un compte je me connecte</p>
                </a>
          </form>
        </div>
    </section>
</body>
</html>