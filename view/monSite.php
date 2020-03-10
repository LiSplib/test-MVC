<?php $title = 'Mon site'; ?>

<?php ob_start(); ?>

<?php if(isset($_SESSION['auth'])): ?>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container mt-5">
            <h3 class="mt-5">Bienvenue <?= $_SESSION['username'] ?></h3>
        </div>
    </div>
<?php endif; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-body text-center bg-dark text-white">
            <h5 class="card-title">Mon site</h5>
            <h6 class="card-subtitle mb-2 text-muted">url du site</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illum minima ipsa velit, temporibus excepturi animi ullam unde quia repellat. Hic modi veritatis expedita doloribus deleniti soluta ut et commodi?</p>
            <a href="#" class="card-link">Editer</a>
            <a href="#" class="card-link">Supprimer</a>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php');