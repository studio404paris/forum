<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets6.lottiefiles.com/datafiles/eAbFb2vqjxlD8oV/data.json"  background="transparent"  speed="1"  style="width: 50px; height: 50px;"    autoplay></lottie-player>   
      </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white">Accueil</a></li>
          <li><a href="#" class="nav-link px-2 text-white"></a>Les questions</li>
          <li><a href="#" class="nav-link px-2 text-white">Publier Une Question</a></li>
          

        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
            <?php 
            session_start();


            if(isset($_SESSION['auth'])){
                echo '<a href="actions/logoutAction.php" class="btn btn-outline-light me-2">Logout</a>';
            }
            if(!isset($_SESSION['auth'])){
                echo '<a href="login.php" type="button" class="btn btn-outline-light me-2">Se connecter</a> 
                <a href="signup.php" type="button" class="btn btn-warning">Créer un compte</a>
                ';
            }
        
            ?>
        </div>
      </div>
    </div>
  </header>