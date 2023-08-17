<?php
class frontController
{
    private $action;
    private $params;
    public function assembleRequest()
    {
        //echo "Hi Houstons we have a problem ...";
        //print_r($_REQUEST);
        if (isset($_REQUEST["url"])) {
            //echo ("Hi Houston Ok");
           // print_r($_REQUEST["url"]);
            $myUrl = explode("/", trim($_REQUEST["url"]));
            //print_r("<pre>");
            //print_r($myUrl);
            $this->action = array_shift($myUrl);
            //print_r("La accion : " .  $this->action );
            //print_r($myUrl);
            $this->params = $myUrl;
            $this->dispatcher($this->action,$this->params);
        }else{
            print_r("<br>");
            print_r("Invalid Action :(");
            }
        }


        public function dispatcher($action, $params)
    {
        $filename = ACTIONS . $action .".php";
       // print_r($filename);
       // print_r("<br>");
       // print_r("punto 1");
       // print_r("<br>");

        if (is_file($filename)){
            require_once $filename;
            //print_r($action);

            if (!class_exists($action)) {
                echo "clase no existeeee";
            }else// si existe
            {
                $cmd = new $action();
                $cmd->execute($params);
            }
        }else 
            echo "<br> archivo no existe";
        }

        
    }
       
    
