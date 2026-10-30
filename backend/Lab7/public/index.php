<?php 
    require_once "../vendor/autoload.php";
    require_once "../controllers/MainController.php";
    require_once "../controllers/AstraController.php";
    require_once "../controllers/AstraImageController.php";
    require_once "../controllers/AstraDescriptionController.php";
    require_once "../controllers/SpaceMarineController.php";
    require_once "../controllers/SpaceMarineImageController.php";
    require_once "../controllers/SpaceMarineDescriptionController.php";
    require_once "../controllers/Controller404.php";

    $loader = new \Twig\Loader\FilesystemLoader('../views');
    $twig = new \Twig\Environment($loader);

    $url = $_SERVER["REQUEST_URI"];

    $title = ""; 
    $template =     "";
    $context = [];
    $controller = new Controller404($twig); // create a variable for the controller

    if ($url == "/") {
        $controller = new MainController($twig);
    } elseif (preg_match("#^/SpaceMarine#", $url)) {
        $controller = new SpaceMarineController($twig);

        if (preg_match("#/image#", $url)) {
            $controller = new SpaceMarineImageController($twig);

        } elseif (preg_match("#/description#", $url)) {
            $controller = new SpaceMarineDescriptionController($twig);

        } elseif ($url != "/SpaceMarine") {
            $controller = new Controller404($twig); // create a variable for the controller

        }
    } elseif (preg_match("#^/Astra#", $url)) {

        $controller = new AstraController($twig);

        if (preg_match("#/image#", $url)) {
            $controller = new AstraImageController($twig);


        } elseif (preg_match("#/description#", $url)) {
            $controller = new AstraDescriptionController($twig);

        } elseif ($url != "/Astra") {
            $controller = new Controller404($twig); // create a variable for the controller

        }
    }

    if ($controller) {
        $controller->get();
    }

?>
