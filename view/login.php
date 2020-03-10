<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid text-center bg-dark text-white">
    <div class="container">
        <h1>Se Connecter</h1>
            <div class="userLog mt-5"> 
                <form action="../controller/connect.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" />
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" name="password" placeholder="Mot de passe" />
                        </div>
                    </div>
                    <div class="mt-5">
                        <input type="submit" class="btn btn-info" value="Se Connecter"/>
                    </div>
                </form>
            </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php');