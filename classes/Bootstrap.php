<?php

class Bootstrap{
    private $controller;
    private $action;
    private $request;

    public function __construct($request){
        $this->request = $request;
        if($this->request['controller'] == ""):
            $this->controller = "home";
        else:
            $this->controller = $this->request['controller'];
        endif;
        if($this->request['action'] == ""):
            $this->action = "index";
        else:
            $this->action = $this->request['action'];
        endif;
    }

    public function createController(){
        if(class_exists($this->controller)):
            $parents = class_parents($this->controller);
            if(in_array("Controller", $parents)):
                if(method_exists($this->controller, $this->action)):
                    return new $this->controller($this->action, $this->request);
                else:
                    echo "<h1>Method Does Not Exist</h1>";
                    return;
                endif;
            else:
                echo "<h1>Base Controller Does Not Exists</h1>";
                return;
            endif;
        else:
            echo "<h1>Controller classes does not exist</h1>";
            return;
        endif;
    }
}
