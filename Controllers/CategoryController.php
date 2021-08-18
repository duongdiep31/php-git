<?php
require_once BASE_MAIN . '/Models/CategoryModel.php';
class CategoryController extends BaseController{
    public function list()
    {
        $cates = CategoryModel::all();
        $this->renderCate('listDM',compact('cates'));
    }
    public function addCate()
    {
        $this->renderCate('addCate');
    }
    public function insert(){
        $image = $_FILES['image'];
        $image = uploadImage($image);
        $namecate = $_POST['namecate'];    
        CategoryModel::insert(compact('image','namecate'));       
        header('Location: /mvc/listDM');
    }
    
        public function delete()
        {
            CategoryModel::delete($_GET['id']);
            header('Location: /mvc/listDM');
        }
        public function updateCate()            
    {
        $item = CategoryModel::find($_GET['id']);
        $this->renderCate('updateCate',compact('item'));
    }
    public function update()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['image'] = empty($_FILES['image']['size']) ? $params['image_existed'] : uploadImage($_FILES['image']);
        unset($params['image_existed']);
        CategoryModel::update($id, $params);
        header('Location: /mvc/listDM');
    
    }
}