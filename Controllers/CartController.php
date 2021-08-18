<?php
require_once BASE_MAIN . '/Controllers/BaseController.php';
require_once BASE_MAIN . '/Models/ProductModel.php';
class CartController extends BaseController{
    
    
    public function Add(){
        // unset($_SESSION);
        $id = $_GET['id'];
        if(!isset($_SESSION['cart']))//neu khong ton tai gio hang
        {
            $_SESSION['cart']=array();//tao gio hang
        }
        if(!isset($_SESSION['cart'][$id]))//neu khong ton tai ma hang
        {
            $_SESSION['cart'][$id]['id'] = $id;
            $_SESSION['cart'][$id]['sl']=1;//gan so luong =1
        }
        else//neu ton tai ma hang, cong so luong them 1
        {
            $_SESSION['cart'][$id]['id'] = $id;
            $_SESSION['cart'][$id]['sl'] +=1;
        }
         header('Location: /mvc');
    }
    public function Cart(){
        
        $this->render('Cart');
    }
    public function RemoveCartid(){
        $id = $_GET['id']; // lay id tu duong link
        unset($_SESSION['cart'][$id]); // xoa id
        header('Location: /mvc/cart');
        
    }
}