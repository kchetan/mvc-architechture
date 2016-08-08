<?php

    /**
    * The home page view
    */
    class View
    {

        private $model;

        private $controller;


        function __construct()
        {

        }

        public function setIndexView()
        {
            require_once 'views/index_view.php';
        }

        public function render_data($data)
        {
            $arrlength = count($data);
            for($x = 0; $x < $arrlength; $x++) 
            {
                for ($y = 0; $y < count($data[$x]); $y++)
                {    
                    echo $data[$x][$y].' ';    
                }
                echo '<br />';
            }
        }

    }