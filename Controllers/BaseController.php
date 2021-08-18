<?php
require_once BASE_MAIN . '/Models/infoModel.php';
class BaseController {


  
    protected function render($view = '', $params = [])
    {
        $info = infoModel::all();
        extract($params);
        ob_start();
        require_once BASE_MAIN . "/Views/main/$view.php";
        $contents = ob_get_clean();
        require_once BASE_MAIN . '/Views/layout/main.php';
    }


    protected function renderAdmin($view = '', $params = [])
    {
        $info = infoModel::all();
        extract($params);
        ob_start();
        require_once BASE_MAIN . "/Views/admin/$view.php";
        $contents = ob_get_clean();
        require_once BASE_MAIN . '/Views/layout/admin.php';
    }
    protected function renderSlider($view = '', $params = [])
    {
        extract($params);
        ob_start();
        require_once BASE_MAIN . "/Views/admin/$view.php";
        $contents = ob_get_clean();
        require_once BASE_MAIN . '/Views/layout/admin.php';
    }

    protected function renderCate($view = '', $params = [])
    {
        extract($params);
        ob_start();
        require_once BASE_MAIN . "/Views/admin/$view.php";
        $contents = ob_get_clean();
        require_once BASE_MAIN . '/Views/layout/admin.php';
    }






    protected function renderInfo($view = '', $params = [])
    {

        extract($params);
        ob_start();
        require_once BASE_MAIN . "/Views/admin/$view.php";
        $contents = ob_get_clean();
        require_once BASE_MAIN . '/Views/layout/admin.php';
    }
    
}