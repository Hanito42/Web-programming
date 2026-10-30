<?php
require_once "SpaceMarineController.php"; // import TwigBaseController

class SpaceMarineImageController extends SpaceMarineController {
    public $template = 'image.twig';


    public function getContext(): array
    {
        $context = parent::getContext();

        $context['is_image'] = True;
        $context['image'] = '/images/Adeptus_Astartes_Icon.webp';

        return $context;
    }
}