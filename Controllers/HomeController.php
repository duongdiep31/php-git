<?php
require_once BASE_MAIN . '/Controllers/BaseController.php';
require_once BASE_MAIN . '/Models/ProductModel.php';
require_once BASE_MAIN . '/Models/SliderModel.php';
require_once BASE_MAIN . '/Models/CategoryModel.php';
class HomeController extends BaseController{
    public function Home(){
        $products = ProductModel::all();
        $slider = SliderModel::all();
        $cates = CategoryModel::all();
        $this->render('home',compact('products','slider','cates'));
    }
    public function Contact(){
        $this->render('contact');
    }

    
    public function Product(){


        $products = ProductModel::all();

        $this->render('Product',compact('products'));
    }
    public function spDM()
    {   
        $product_cate = ProductModel::where($_GET['id']);
        $this->render('productcate',compact('product_cate'));
    }
    
    public function details(){
        $products = ProductModel::all();
        $item = ProductModel::find($_GET['id']);
        $this->render('details',compact('item','products'));
    }
    public function HomeAdmin(){
        $this->renderAdmin('home');
    }
    public function user()
    {
        $this->render('user');
    }
    
}