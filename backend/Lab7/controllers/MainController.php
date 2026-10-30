<?php
require_once "TwigBaseController.php"; // import TwigBaseController

class MainController extends TwigBaseController {
    public $template = "main.twig";
    public $title = "Home";
}