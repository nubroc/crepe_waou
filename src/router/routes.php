<?php

require_once __DIR__ . '/../controllers/MainController.php';

$router = new AltoRouter();

// Calcul automatique de la base path (en incluant /public)
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$router->setBasePath($basePath);

// Routes
$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/catalogue', 'MainController#catalogue', 'catalogue');

$router->map('GET', '/login', 'MainController#login', 'login');
$router->map('GET', '/panier', 'MainController#panier', 'panier');

$router->map('GET', '/voituremegane', 'MainController#voituremegane', 'voituremegane');
$router->map('GET', '/voiturecitroen', 'MainController#voiturecitroen', 'voiturecitroen');
$router->map('GET', '/voituregti', 'MainController#voituregti', 'voituregti');

$router->map('GET', '/singin', 'MainController#singin', 'singin');

$router->map('GET', '/partials/footer', 'MainController#footer', 'footer');
$router->map('GET', '/partials/header', 'MainController#header', 'header');
// Retourne l'objet router
return $router;
