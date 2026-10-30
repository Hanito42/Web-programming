<?php
require_once "SpaceMarineController.php"; // import TwigBaseController

class SpaceMarineDescriptionController extends SpaceMarineController {
    public $template = "SpaceMarine/description.twig";


    public function getContext(): array
    {
        $context = parent::getContext();

        $context['is_description'] = True;

        return $context;
    }
}