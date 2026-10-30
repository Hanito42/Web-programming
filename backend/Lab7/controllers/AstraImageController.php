<?php
require_once "AstraController.php"; // import TwigBaseController

class AstraImageController extends AstraController {
    public $template = 'image.twig';


    public function getContext(): array
    {
        $context = parent::getContext();

        $context['is_image'] = True;
        $context['image'] = '/images/Astra_Militarum_Icon.webp';

        return $context;
    }
}