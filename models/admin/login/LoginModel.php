<?php
class LoginModel extends MasterModel{
    public function get_nv($email,$pass){
        return parent::Login($email,$pass);
}

}

