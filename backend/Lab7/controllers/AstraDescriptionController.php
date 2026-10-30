<?php
require_once "AstraController.php"; // import TwigBaseController

class AstraDescriptionController extends AstraController {
    public $template = "AstraMilitarum/description.twig";


    public function getContext(): array
    {
        $context = parent::getContext();

        $context['is_description'] = True;

        return $context;
    }
}