<?php
require_once "BaseController.php"; // we must import BaseController

class TwigBaseController extends BaseController {
    public $title = ""; // page title
    public $template = ""; // page template
    protected \Twig\Environment $twig; // reference to the twig instance for rendering
    
    // now we write the constructor, 
    // passing one parameter to it
    // actually a reference to the twig instance
    // this is called Dependency Injection, by the way
    // this is better than creating a global $twig object 
    // and faster than creating a personal $twig handler for each class 
    public function __construct($twig)
    {
        $this->twig = $twig; // pass it inside
    }
    
    // we override the context function
    public function getContext() : array
    {
        $context = parent::getContext(); // we call the parent method
        $context["title"] = $this->title; // we add title to the context

        return $context;
}

// get function, renders the result using $template as a template
// and calls the getContext function to form the context dictionary
public function get() {
    echo $this->twig->render($this->template, $this->getContext());
}
}