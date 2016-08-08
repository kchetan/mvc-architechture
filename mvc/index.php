<?php

    $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

    require_once __DIR__.'/models/model.php';
    require_once __DIR__.'/controllers/controller.php';
    require_once __DIR__.'/views/view.php';

    if ($url == '/')
    {
        $indexView = New View();
        print $indexView->setIndexView();
    }
    else{

    	//var_dump($url);
        $ctrlPath = __DIR__.'/controllers/controller.php';

        if (file_exists($ctrlPath))
        {
            $controllerObj  = new Controller();
            $data = $controllerObj->getData($url);
            $viewObj = new View();
            $viewObj->render_data($data);

        }
        else{

            header('HTTP/1.1 404 Not Found');
            die('404 - The file - '.$ctrlPath.' - not found');
            //require the 404 controller and initiate it
            //Display its view
        }
    }