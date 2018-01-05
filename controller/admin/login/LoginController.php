<?php
class LoginController {
    public function index(){
     if(isset($_POST['email'])&&isset($_POST['pass'])) {
         $email = $_POST['email'];
         $pass = $_POST['pass'];
         $dsnv = LoginModel::get_nv($email,$pass);
         if(count($dsnv)==10)
         {
             $_SESSION['user']=$dsnv;
             header('Location:admin');
         }
         else{
             echo"nhập sai";
         }
     }

       return View::login();
    }


}