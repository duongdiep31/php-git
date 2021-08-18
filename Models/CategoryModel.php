<?php
require_once BASE_MAIN . '/Models/BaseModels.php';
class CategoryModel extends BaseModels{
    protected $table_name = 'category';
    protected $primary_key = 'id';
}