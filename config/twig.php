<?php

// Ne pas oublier de lancer 'composer install' depuis la racine afin que composer puisse télécharger les librairies via le fichier composer.lock

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());
