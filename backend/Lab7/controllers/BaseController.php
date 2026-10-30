<?php
// abstract class so that no instance can be created
abstract class BaseController {
    // since everything revolves around data, let's create a function
    // that will return the context with data
    public function getContext(): array {
        return []; // empty context by default
    }
    
    // the get function will call the rendering directly
    // since it is not necessary to render twig templates, but you can, for example, render any json
    // so we will make the method abstract, so that whoever inherits BaseController
    // must override this method
    abstract public function get();
}