<?php  include 'actions/securityAction.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier un article</title>
</head>
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
                <h1 class="font-weight-bold ">Publiez une question </h1>
                <p>Vous avez une question ? Remplissez ce formulaire et la communautée y répondra sous peu !</p>
                <hr class="hr" />
            </div>
            <form class="text-center" method="POST">
                <?php 
                    if(isset($errorMsg)){
                        echo '<div class="alert alert-danger" role="alert">'.$errorMsg.'</div>';
                    }

                ?>
                <div class="mb-3 m-2">
                    <label for="exampleInputEmail1" class="form-label h5">Titre de la question</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3 m-2">
                    <label for="exampleInputEmail1" class="form-label h5">Decription de la question</label>
                    <textarea type="text" class="form-control" name="description"></textarea>
                </div>
                <div class="mb-3 m-2">
                    <label for="exampleInputEmail1" class="form-label h5">Question</label>
                    <textarea type="text" class="form-control" name="content"></textarea>
                </div>
                <button type="submit" class="btn btn_valider m-2" name="validate">Publier la question</button>

          </form>
        </div>
    </section>
</body>
</html>