<?php

use LDAP\Result;

class frontController
{
    private $action;
    private $params;
    public function assembleRequest()
    {
        //echo "Hi Houstons we have a problem ...";
        //print_r($_REQUEST);
        if (isset($_REQUEST["url"])) {
            $myUrl = explode("/", trim($_REQUEST["url"]));
            $view=array_shift($myUrl);
            if ($view=="api")
            {
                define("SENTINEL",true);
            }
            else{

                define("SENTINEL",FALSE);
            }
            //$COMPLEMENTO = $myUrl;
            $this->action = array_shift($myUrl);
            $this->params = $myUrl;
            $result=$this->dispatcher($this->action,$this->params);
            if($result["result"]=="fail")
            {
                $result["view"]=="defaulError";
                 
            }
            if(SENTINEL)
            print_r(json_encode($result));
            else 
            view::render($result);
            
        }else {
                print_r("Invalid Action :(");
            }
        }


        public function dispatcher($action, $params)
    {
        $filename = ACTIONS . $action .".php";
        if (is_file($filename)){
            require_once $filename;

            if (!class_exists($action)) {
                echo "clase no existeeee";
            }else// si existe
            {
                $cmd = new $action();
                return $cmd->execute($params);
            }
        }else 
            echo "<br> archivo no existe";
        }

        
    }
       
    
