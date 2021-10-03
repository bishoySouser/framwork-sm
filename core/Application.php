<?php

namespace app\core;
/**
 * Class Application
 * 
 * @author Bishoy Souser
 */

class Application
{
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        $this->router->resolve();
    }
}