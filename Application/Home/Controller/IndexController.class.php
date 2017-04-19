<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    		$this->assign('css_file','home_index');
    		$this->display();
    }
}