<?php
class boostrap {
    public function url(){
        $url =isset($_GET["url"]) ? $_GET["url"] :null;
        $url =rtrim($url,'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $url=explode('/',$url);
        return $url;
    }
    public function __construct (){
        $url=$this->url();

      if($url[0] =='admin'){
//        nếu có session
        if(isset($_SESSION['user'])){      // Tạo tên Controller từ URL - VD abc.com/hocsinh => HocsinhController
            if(empty($url[1])){
                $url[1]  ="dashboard";
            }
                $controller = ucfirst($url[1]) . 'Controller';
                $modal = ucfirst($url[1]) . 'Model';

// Kiểm tra file Controller có tồn tại hay không

                if (file_exists('controller/admin/'.$url[1].'/' . $controller . '.php')) {

                    // Gọi Controlle
                    require_once 'controller/admin/'.$url[1].'/' . $controller . '.php';
                    // Gọi modals
                    require_once 'models/admin/'.$url[1].'/' .  $modal . '.php';
                    // Khởi tạo đối tượng từ Controller đó
                    $object_controller = new $controller;

                    // Không tòn tại Action sẽ được gọi mặc định đến phương thức index
                    if (empty($url[2])) {
                        $object_controller->index();
                    }
                    else if (method_exists($object_controller, $url[2])) {
                        if (isset($url[6])) {
                            $object_controller->{$url[2]}($url[3], $url[4], $url[5], $url[6]);
                        } elseif (isset($url[5])) {
                            $object_controller->{$url[2]}($url[3], $url[4], $url[5]);
                        } elseif (isset($url[4])) {
                            $object_controller->{$url[2]}($url[3], $url[4]);
                        } elseif (isset($url[3])) {
                            $object_controller->{$url[2]}($url[3]);
                        } else {
                            $object_controller->{$url[2]}();
                        }
                    } else {
                        echo "Action này không tồn tại";
                        return false;
                    }
                } else {
                    echo "Controller này không tồn tại";
                    return false;
                }


        }
//        không có session
        else{
            require_once ('models/admin/login/LoginModel.php');
            require_once ('controller/admin/login/LoginController.php');

          $layout = new LoginController();
            $layout->index();
        }
      }

      else{
          if(empty($url[0])){
              require_once ('controller/indexController.php');
              $layout =new IndexController();
              return false;
          }
          else{
              // Tạo tên Controller từ URL - VD abc.com/hocsinh => HocsinhController
              $controller = ucfirst($url[0]).'Controller';

// Kiểm tra file Controller có tồn tại hay không
              if (file_exists('controllers/'.$controller.'.php')) {

                  // Gọi Controlle
                  require_once 'controllers/'.$controller.'.php';

                  // Khởi tạo đối tượng từ Controller đó
                  $object_controller = new $controller;

                  // Không tòn tại Action sẽ được gọi mặc định đến phương thức index
                  if (empty($url[1])) {
                      $object_controller->index();
                  }
                  if (method_exists($object_controller,$url[1])) {
                      if (isset($url[5])) {
                          $object_controller->{$url[1]}($url[2], $url[3], $url[4], $url[5]);
                      } elseif (isset($url[4])) {
                          $object_controller->{$url[1]}($url[2], $url[3], $url[4]);
                      } elseif (isset($url[3])) {
                          $object_controller->{$url[1]}($url[2], $url[3]);
                      } elseif (isset($url[2])) {
                          $object_controller->{$url[1]}($url[2]);
                      } else {
                          $object_controller->{$url[1]}();
                      }
                  } else {
                      echo "Action này không tồn tại";
                      return false; }
              } else {
                  echo "Controller này không tồn tại";
                  return false;
              }
          }
      }
    }
}
