<?php 
    global $error_code;
    class Router {
        public $default = "";
        public $debug = false;
        private $controllers = array();
        private $error_controller = "";
        private $is_setErrorController = false;


        //initialize router
        private function init()
        {

            //check for errors,if source files exists for controllers,check if error controller is set
            $error_count = 0;
            $error_log = "";
            if($this->is_setErrorController && !file_exists(getcwd()."/app/controllers/".$this->error_controller.".php"))
            {
                $error_count++;
                $error_log = $error_log."Error: Error controller file '".$this->error_controller."' does not exists<br>";
            }
            else if(!$this->is_setErrorController)
            {
                $error_count++;
                $error_log = $error_log."Error: Error controller file does not set<br>";
            }


            $keys = array_keys($this->controllers);
            for($i = 0;$i < count($this->controllers);$i++)
            {
                if(!file_exists("app/controllers/".$this->controllers[$keys[$i]].".php"))
                {
                    $error_count++;
                    $error_log = $error_log."Error: Controller file '".$this->controllers[$keys[$i]]."' does not exists<br>";
                }
            }

            if($error_count > 0)
            {
                if($debug)
                {
                    echo $error_log;
                }
                exit(0);
            }
        }

        //register controller 
        public function register($key,$controller)
        {
            $this->controllers[$key] = $controller;
        }

        //register controller for error handling
        public function register_error($controller)
        {
            $this->error_controller = $controller;
            $this->is_setErrorController = true;
        }

        //start executing controller
        public function execute()
        {
            $this->init();
            if(isset($_GET['page']))
            {
                if(array_key_exists($_GET['page'],$this->controllers))
                {
                    require_once getcwd()."/app/controllers/".$this->controllers[$_GET['page']].".php";
                }
                else {
                    $error_code = "404";
                    require_once getcwd()."/app/controllers/".$this->error_controller.".php";
                }
            }
            else {
                if(array_key_exists($this->default,$this->controllers))
                {
                    require_once getcwd()."/app/controllers/".$this->controllers[$this->default].".php";
                }
            }
        }

    }
?>