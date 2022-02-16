<?php

class Router {



    

    /**
     * Holds the registered routes.
     *
     * @var array $routes
     */
     public  $routes = [];

     public $action ;
     
    
    /**
     * Register a new route.
     *
     * @param $action string
     * @param \Closure $callback Called when current URL matches provided action
     */
    public function route($action, Closure $callback)
    {
        global $routes;
        $action = trim($action, '/');
        $action = preg_replace('/{[^}]+}/','(.+)',$action);
        $routes[$action] = $callback;
    }
    
    /**
     * Dispatch the router.
     *
     * @param $action string
     */
    public function launch($action)
    {
        global $routes;
        $action = trim($action, '/');
        // $callback = $routes[$action];
        $callback = null;
        $params =[];
        foreach ($routes as $route => $handler){
            if(preg_match("%^{$route}$%",$action,$matches) === 1){
                // exit(var_dump($route) . " -- " . $action);

                $callback = $handler;
                unset($matches[0]);
                $params = $matches;
                break;
    
            }
        }
        if(!$callback || !is_callable($callback)){
            http_response_code(404);
            require 'pages_error404.html';
            exit;
        }
    
        echo call_user_func($callback, ...$params);
    }
    
    public function view($path,array $dollar){
        func_get_args();
        
        require __DIR__.'/../'.$path;
    
    }

    public function action (){

    return  $this->action = $_SERVER['REQUEST_URI'];
        
    }
    
    
    


}