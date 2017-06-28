<?php
class homeController extends controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {    
        global $smarty;       
        $smarty->assign('name','Thiago');
        $smarty->assign('sobrenome','Silvestrini');
        $smarty->display('home.tpl');
    }       
}