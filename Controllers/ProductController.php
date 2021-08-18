<?php
require_once BASE_MAIN . '/Models/ProductModel.php';
require_once BASE_MAIN . '/Models/CategoryModel.php';
class ProductController extends BaseController{
    public function list()
    {
        $products = ProductModel::all();
        $this->renderAdmin('listProduct',compact('products'));
    }
    public function viewFormAdd()
    {
        $cate = CategoryModel::all();
        $this->renderAdmin('AddProduct',compact('cate'));
    }
   
    public function insert(){
        $image = $_FILES['image'];
        $image = uploadImage($image);
        $name = $_POST['name'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $description = $_POST['description'];
        $description2 = $_POST['description2'];
        $quantity = $_POST['quantity'];
        $cate_id = $_POST['cate_id'];
      
        ProductModel::insert(compact('image','name','price','discount','description','description2','quantity','cate_id'));
        header('Location: /mvc/productList');
    }
    public function delete()
    {
        ProductModel::delete($_GET['id']);
        header('Location: /mvc/productList');
    }
    public function detail()            
    {   
        $item = ProductModel::find($_GET['id']);
        $cate = CategoryModel::all();
        $this->renderAdmin('UpdateProduct',compact('item','cate'));
    }
    public function update()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['image'] = empty($_FILES['image']['size']) ? $params['image_existed'] : uploadImage($_FILES['image']);
        unset($params['image_existed']);
        ProductModel::update($id, $params);
        header('Location:  /mvc/productList');
    
    }
}