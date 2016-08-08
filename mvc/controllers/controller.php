<?php

    /**
    * The home page controller
    */
    class Controller
    {

        function __construct()
        {  

        }

        public function getData($url)
        {
            if(sizeof($url)>1)
            {
                return array('<center><h3>Incorrect url format</h3></center>');
            }
            $modelObj = new Model();
            $contents = $modelObj->getFileContents($url[0]);
            return $contents;
        }


    }