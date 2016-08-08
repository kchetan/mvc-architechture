<?php

    /**
    * The home page model
    */
    class Model
    {

        private $message = 'Welcome to Home page.';

        function __construct()
        {

        }

        public function getFileContents($fileName)
        {
            $filePath = __DIR__.'/'.$fileName;

            if(file_exists($filePath))
            {
                $csv = array_map('str_getcsv', file($filePath));
                return $csv;
            }
            else
            {
                header('HTTP/1.1 404 Not Found');
                die('404 - The file - '.$filePath.' - not found');
            }
        }

    }