<?php
class View {

    public function __construct()     {

    }
    public function login (){
        require_once 'views/admin/login/index.php';
    }

    public function view_detail_AM ($name,$param='index')
    {
        require_once 'views/admin/layout/header.php';
        require 'views/admin/'.$name.'/'.$param.'.php';
        require_once 'views/admin/layout/footer.php';
    }


}
?>