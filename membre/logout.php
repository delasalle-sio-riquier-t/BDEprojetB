﻿<?php include('../include/head.php'); ?>
<?php include('../include/menu.php');?>
<div class="container">    
	<?php    if (isset($_SESSION['numMembre'])) //les membres non connectes ne peuvent pas se deconnecter    
    {        /*on vire toutes la variables de session*/        $_SESSION = array();        session_destroy();        ?>

        <div class="panel panel-success">
            <div class="panel-heading">Vous êtes maintenant déconnecté !</div>
            	<div class="panel-body">                
			<a class="btn btn-success" href="login.php">Connexion</a>
                	<a class="btn btn-success" href="../index.php">Accueil</a>
            	</div>        
	</div>
        <?php    } else {        ?>
        <div class="panel panel-danger">
            <div class="panel-heading">Vous êtes déjà déconnecté !</div>
            <div class="panel-body">                
<a class="btn btn-danger" href="login.php">Connexion</a>                <a class="btn btn-danger" href="../index.php">Accueil</a>            </div>        </div>        <?php    } ?></div> <!-- /container --><?php include('../include/footer.php'); ?>