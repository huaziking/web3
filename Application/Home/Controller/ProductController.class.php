<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function index(){
      $this->assign('css_file','home_product');
      $this->assign('js_file','home_product');
      $this->display();
    }
    public function id($id){
      $this->display();
    }
    public function category($id){
      $this->display();
    }
}
