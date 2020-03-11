<?php

session_start();
unset($_SESSION['auth']);
$_SESSION['flash']['danger'] = 'Vous êtes bien déconnecté';

header('Location: /MVC/view/monSite.php');