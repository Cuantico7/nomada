<?php



class frontController
{
    private $action;
    public function assembleRequest()
    {
        //echo "Hi Houstons we have a problem ...";
        //print_r($_REQUEST);
        if (isset($_REQUEST["url"])) {
            //echo ("Hi Houston Ok");
            print_r($_REQUEST["url"]);
            $myUrl = explode("/", trim($_REQUEST["url"]));
            print_r("<pre>");
            print_r($myUrl);
            $this->action = array_shift($myUrl);
            print_r("La accion : " . $this->action . "<br>");
            print_r($myUrl);
        }else{
            print_r("<br>Invalid Action :(");
            }
        }
       
    
}