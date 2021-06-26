<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/src');
$twig = new Environment($loader);

$names = [Tom, Bread];
$colors  = [Orange, SlateBlue, DodgerBlue, MediumSeaGreen];
echo $twig->render('tmp.twig', ['colors' => $colors,
    'names' => $names]);