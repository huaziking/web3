<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function index($id=0){
        $this->assign('product_id',$id);
        $this->assign('css_file','home_product');
        $this->display();
    }
}