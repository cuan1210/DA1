<?php 

class HomeController
{
    public $modelSanPham;
    
    public function __construct()
    {
        $modelSanPham = new SanPham();
    }

    public function home(){
        echo "Home Page";
    }

    public function trangChu(){
        echo "Trang chủ";
    }

    public function danhSachSanPham(){
        $listProduct = $this->modelSanPham->getAllProduct();
    }

}