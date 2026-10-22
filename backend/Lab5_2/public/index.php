<?php

// connect the packages that were installed via composer
require_once '../vendor/autoload.php';

// create a template loader and specify the folder with templates
// \Twig\Loader\FilesystemLoader -- it's like writing Twig.Loader.FilesystemLoader in C#, 
// only with a slash instead of dots
$loader = new \Twig\Loader\FilesystemLoader('../views');

// create an instance of Twig that will be used for rendering
$twig = new \Twig\Environment($loader);

$url = $_SERVER["REQUEST_URI"];

// ...
$url = $_SERVER["REQUEST_URI"];

// added two variables
$title = "";
$template = "";


$context = []; // our dictionary, data for the template is commonly referred to as context

if ($url == "/") {
    $title = "Home";
    $template = "main.twig";
} elseif (preg_match("#/mermaid#", $url)) {
    $title = "Mermaid";
    $template = "base_image.twig";
    
    $context['image'] = "/images/Adeptus_Astartes_Icon.webp"; // pass the image key to the context
} elseif (preg_match("#/uranus#", $url)) {
    $title = "Uranus";
    $template = "base_image.twig";
    
    $context['image'] = "/images/Astra_Militarum_Icon.webp"; // and here we pass the image key to the context
}

// I don't put the name in the context in the router,
// because it's a separate entity, common to all
$context['title'] = $title;

// and then I render it
echo $twig->render($template, $context);