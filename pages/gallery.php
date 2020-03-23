<?php 
        session_start();
        include('../layouts/nav.php'); 
?>
        <main>
                <section class="gallery">
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a> 
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                </section>
                <section class="gallery">
                        <?php if( isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true){
                        ?>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a> 
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/200" alt=""></a>
                        <?php }else{ 
                        ?>
                        <a href="account.php">Voir Plus</a>
                        <?php } ?>
                </section>
        </main>
<?php include('../layouts/footer.php'); ?>
