<?php

Class Router
{
    protected $routes;

    public function __construct($definitions)
    {
        $this->routes == $this->compileRoutes($definitions);
    }

    public function compileRoutes($definitions)
    {
        $routes = array();

        foreach ($definitions as $url => $params) {
            $takens = explode('/',ltrim($url,'/'));

            foreach ($tokens as $i => $token) {
                if(0 === strpos($token,':')) {
                    $name = substr($token,1);
                    $token = '(?P<' . $name . '>[^/]+';
                }
                $tokens[$i] = $token;
            }

            $pattern = '/' . impplode('/',$tokens);
            $routes[$pattern] = $params;
        }
        return $routes;
    }

    public function resolve($path_info)
    {
        if('/' !== substr($path_info,0,1)) {
            $path_info = '/' . $path_info;
        }
        foreach ($this->routes as $pattern => $params) {
            if(preg_match('#^' . $pattern . '$#',$path_info,$macthes)) {
                $params = array_merge($params,$macthes);

                return $params;
            }
        }

        return false;
    }
}