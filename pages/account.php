<?php 
     session_start();
     include('../layouts/nav.php');
     //login
     if (isset($_POST)){
             if (!empty($_POST['user_password']) && !empty($_POST['user_name']) && $_POST['user_password'] === '9876' && !empty($_POST['user_mail']) ){
                $_SESSION['user_name'] = $_POST['user_name'];
                $_SESSION['isConnected'] = true;
                $_SESSION['user_mail'] = $_POST['user_mail'];
                
                
             } else {
                      $error['user_password'] = "Entre 9876 pour essayer notre site !";
                      $_SESSION['isConnected'] = false;
                      
             }
     }

?>
    <main>
        <?php 
             if( isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true){
        ?>
        <h1>Vous êtes connecté</h1>
        <p>Votre Mail est : <?php echo $_SESSION['user_mail'] ?></p><br/>
        <p>Votre Nom est : <?php echo $_SESSION['user_name'] ?></p><br/>
        <!--<div><p>Souhaitez vous recevoir nos actualités par mail ? </p></div>-->
        <?php 
             }else{
        ?>
        
        <h1>Se connecter</h1>
        <form method="POST">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div>
                <label for="mail">Mail :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="text" id="password" name="user_password">
            </div>
            <!-- Connexion avec fb-->
            <!-- Connexion avec gmail-->
            <div class="button">
                <button type="submit">Connexion</button>
            </div>
        </form>
         
        <?php } ?>  
    </main>
<?php include('../layouts/footer.php'); ?>
