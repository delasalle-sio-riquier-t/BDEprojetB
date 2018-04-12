<?php include('../include/head.php'); ?>
<?php include('../include/menu.php'); ?>
<div class="container">
    <?php
    if (empty($_SESSION['numMembre'])) //les membres connectes ne peuvent pas se connecter
    {
        ?>
            <div class="row"><br>
                <div class="col-xs-12">
                    <div class="row">

                        <form action="loginok.php" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                            <h2><b>Vous êtes étudiants au Lycée de la Salle ?</b></h2>
                            <h3>Accèdez à votre compte avec vos identifiants !</h3>
							
                            <div class="form-group">
                                <div class="col-md-8"><input class="form-control" type="text" placeholder="Identifiant" name="identifiant"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8"><input class="form-control" type="password" placeholder="Mot de passe" name="mdp"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-0 col-md-8"><button class="btn btn-large btn-primary" type="submit">Connexion</button></div>
                            </div><br/>
                        </form>
                    </div>
                </div>
            </div>

    <?php
    }
    else
    {	   	header('refresh:5; url=index.php');
            ob_flush();
        ?>
        <div class="alert alert-danger">
            <strong>Erreur :</strong> Vous êtes déjà connecté !
        </div>
        <?php
    } ?>
</div> <!-- /container -->
<?php include('../include/footer.php'); ?>