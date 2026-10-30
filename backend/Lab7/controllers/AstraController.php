<?php
require_once "TwigBaseController.php"; // import TwigBaseController

class AstraController extends TwigBaseController {
    public $title = "Astra Militarum";
    public $template = "__object.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        $context['upper_path'] = 'Astra'; 
        $context['is_image'] = False;
        $context['is_description'] = False;
        $context['text'] = 'Now you will see the power of Astra Militarum';

        return $context;
    }
}