<?php 
    require_once "../vendor/autoload.php";
    // require_once "../controllers/MainController.php";
    
    $loader = new \Twig\Loader\FilesystemLoader('../views');
    $twig = new \Twig\Environment($loader);

    $url = $_SERVER["REQUEST_URI"];

    $title = "";
    $template =     "";
    $context = [];

    if ($url == "/") {
        $title = "Home";
        $template = "main.twig";
    } elseif (preg_match("#^/SpaceMarine#", $url)) {
        $title = "Space Marines";
        $template = "__object.twig";

        $context['upper_path'] = 'SpaceMarine'; 
        $context['is_image'] = False;
        $context['is_description'] = False; 
        $context['text'] = 'Now you will see the power of Space Marines';
        if (preg_match("#/image#", $url)) {
            $context['is_image'] = True;
            $context['image'] = '/images/Adeptus_Astartes_Icon.webp';
            $template = 'image.twig';
        } elseif (preg_match("#/description#", $url)) {
            $template = "SpaceMarine/description.twig";
            $context['is_description'] = True;

        }
    } elseif (preg_match("#^/Astra#", $url)) {
        $title = "Astra Militarum";
        $template = "__object.twig";

        $context['upper_path'] = 'Astra'; 
        $context['is_image'] = False;
        $context['is_description'] = False;
        $context['text'] = 'Now you will see the power of Astra Militarum';
        if (preg_match("#/image#", $url)) {
            $template = 'image.twig';
            $context['is_image'] = True;
            $context['image'] = '/images/Astra_Militarum_Icon.webp';

        } elseif (preg_match("#/description#", $url)) {
            $context['is_description'] = True;
            $template = "AstraMilitarum/description.twig";
        }
    }

    echo $twig->render($template, [
        "title" => $title,
        "context" => $context
    ]);
?>
