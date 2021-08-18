<?php
require_once BASE_MAIN . '/Controllers/HomeController.php';
require_once BASE_MAIN . '/Controllers/ProductController.php';
require_once BASE_MAIN . '/Controllers/CartController.php';
require_once BASE_MAIN . '/Controllers/SliderController.php';
require_once BASE_MAIN . '/Controllers/CategoryController.php';
require_once BASE_MAIN . '/Controllers/InfoController.php';
$page = empty($_GET['page']) ? '' : $_GET['page'];

//home Controllers
if ($page === '') {
    $controller = new HomeController();
    $controller->Home();
}
if ($page === 'admin') {
    $controller = new HomeController();
    $controller->HomeAdmin();
}
if ($page === 'lien-he') {
    $controller = new HomeController();
    $controller->Contact();
}
if ($page === 'San-Pham') {
    $controller = new HomeController();
    $controller->Product();
}
if ($page === 'Chi-Tiet') {
    $controller = new HomeController();
    $controller->details();
}
if ($page === 'user') {
    $controller = new HomeController();
    $controller->user();

}
if ($page === 'San-Pham-DM') {
    $controller = new HomeController();
    $controller->spDM();
    
}

//Product controller
if ($page === 'productList') {
    $controller = new ProductController();
    $controller->list();
}
if ($page === 'productAdd') {
    $controller = new ProductController();
    $controller->viewFormAdd();
}
if ($page === 'insertDataProduct') {
    $controller = new ProductController();
    $controller->insert();
}
if ($page === 'productDelete') {
    $controller = new ProductController();
    $controller->delete();
}
if ($page === 'productUpdate') {
    $controller = new ProductController();
    $controller->detail();
}
if ($page === 'changeDataProduct') {
    $controller = new ProductController();
    $controller->update();
}
//carrt controller
if ($page === 'cart') {
    $controller = new CartController();
    $controller->Cart();
}
if ($page === 'AddCart') {
    $controller = new CartController();
    $controller->Add();
}
if ($page === 'unsetCart') {
    $controller = new CartController();
    $controller->RemoveCartid();
}
///Slider
if ($page === 'listSlider') {
    $controller = new SliderController();
    $controller->listSlider();
}
if ($page === 'sliderAdd') {
    $controller = new SliderController();
    $controller->sliderAdd();
}
if ($page === 'sliderInsert') {
    $controller = new SliderController();
    $controller->insertSlider();
}
if ($page === 'sliderDelete') {
    $controller = new SliderController();
    $controller->delete();
}
if ($page === 'sliderChange') {
    $controller = new SliderController();
    $controller->formChange();
}
if ($page == 'sliderUpdate') {
    $controller = new SliderController();
    $controller->update();
}
///Cate
if ($page == 'listDM'){
    $controller = new CategoryController();
    $controller->list();
}
if ($page == 'addCate'){
    $controller = new CategoryController();
    $controller->addCate();
}
if ($page == 'insertCate'){
    $controller = new CategoryController();
    $controller->insert();
}
if ($page == 'deleteCate'){
    $controller = new CategoryController();
    $controller->delete();
}
if ($page == 'changeCate'){
    $controller = new CategoryController();
    $controller->updateCate();
}
if ($page == 'updateCate'){
    $controller = new CategoryController();
    $controller->update();
}
///info

if ($page == 'listInfo'){
    $controller = new InfoController();
    $controller->listInfo();
}
if ($page == 'addinfo'){
    $controller = new InfoController();
    $controller->infoAdd();
}
if ($page == 'insertInfo'){
    $controller = new InfoController();
    $controller->insert();
}
if ($page == 'deleteInfo'){
    $controller = new InfoController();
    $controller->delete();
}
if ($page == 'changeInfo'){
    $controller = new InfoController();
    $controller->detail();
}
if ($page == 'updateInfo'){
    $controller = new InfoController();
    $controller->update();
}
