<?php
require_once BASE_MAIN . '/Models/BaseModels.php';
require_once BASE_MAIN . '/Models/CategoryModel.php';
class ProductModel extends BaseModels{
    protected $table_name = 'products';
    protected $primary_key = 'id';
    protected $value = 'cate_id';


    public function categoryName()
    {
        $cate = CategoryModel::find($this->cate_id);
        return empty($cate) ? '' : $cate->namecate;
    }

}