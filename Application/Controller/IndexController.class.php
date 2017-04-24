<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->assign('css_file','admin_index');
        $this->display();
    }
}