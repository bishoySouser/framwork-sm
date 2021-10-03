<?php
/**
 * @User: BishoySouser
 */

 namespace app\core;

/**
 * Class Router
 * @author Bishoy Souser
 */
class Router
{
    protected array $routes = [];
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        echo "<pre>";
        var_dump($_SERVER);
        echo "</pre>";
        exit;
    }

}