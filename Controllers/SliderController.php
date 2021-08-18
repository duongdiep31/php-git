<?php
require_once BASE_MAIN . '/Models/SliderModel.php';
class SliderController extends BaseController{
    public function listSlider()
    {   
        $slider = SliderModel::all();
        $this->renderSlider('listSlider',compact('slider'));
    }
    public function sliderAdd()
    {
        $this->renderSlider('sliderAdd');
    }
    public function insertSlider(){
        $images = $_FILES['images'];
        $images = uploadImage($images);
        $title = $_POST['title'];
        $text = $_POST['text'];
        SliderModel::insert(compact('images','title','text'));
        header('Location: /mvc/listSlider');
    }
    public function delete()
    {
        SliderModel::delete($_GET['id']);
        header('Location: /mvc/listSlider');
    }

    public function formChange()
    {
        $item = SliderModel::find($_GET['id']);
        $this->renderSlider('sliderUpdate',compact('item'));
    }
    public function update()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['images'] = empty($_FILES['images']['size']) ? $params['image_existed'] : uploadImage($_FILES['images']);
        unset($params['image_existed']);
        SliderModel::update($id, $params);
        header('Location: /mvc/listSlider');
    
    }

}