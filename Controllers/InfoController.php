<?php
require_once BASE_MAIN . '/Models/infoModel.php';
class InfoController extends BaseController{
    public function listInfo()
    {
        $info = infoModel::all();
        $this->renderInfo('listInfo',compact('info'));
    }
    public function infoAdd()
    {
        $this->renderInfo('addinfo');
    }
    public function insert()
    {
        $logo = $_FILES['logo'];
        $logo = uploadImage($logo);
        $logo_content = $_FILES['logo_content'];
        $logo_content = uploadImage($logo_content);
        $content = $_POST['content'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        infoModel::insert(compact('logo','logo_content','content','email','sdt'));
        header('Location: /mvc/listInfo');
    }
    public function delete()
    {
        infoModel::delete($_GET['id']);
        header('Location: /mvc/listInfo');
    }
    public function detail()
    {
        $item = infoModel::find($_GET['id']);
        $this->renderInfo('updateinfo',compact('item')  );
    }
    public function update()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['logo'] = empty($_FILES['logo']['size']) ? $params['image_existed'] : uploadImage($_FILES['logo']);
        $params['logo_content'] = empty($_FILES['logo_content']['size']) ? $params['image_existed'] : uploadImage($_FILES['logo_content']);

        unset($params['image_existed']);
        infoModel::update($id, $params);
        
        header('Location: /mvc/listInfo');
    
    }
}