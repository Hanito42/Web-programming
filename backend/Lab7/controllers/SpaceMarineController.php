<?php
require_once "TwigBaseController.php"; // import TwigBaseController

class SpaceMarineController extends TwigBaseController {
    public $title = "Space Marines";
    public $template = "__object.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        $context['upper_path'] = 'SpaceMarine'; 
        $context['is_image'] = False;
        $context['is_description'] = False; 
        $context['text'] = 'Now you will see the power of Space Marines';

        return $context;
    }
}