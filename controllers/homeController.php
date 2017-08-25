<?php
class homeController {
    public function index() {    
        global $smarty;       
        $smarty->assign('name','Thiago');
        $smarty->assign('sobrenome','Silvestrini');
        $smarty->display('home.tpl');
    }       
}