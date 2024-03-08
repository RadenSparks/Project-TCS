<?php
function route($path, $controller, $method, $condition = null)
{
  if (is_file($path)) {
    include_once($path);
  }

  if(!$condition){
    $condition = function () { return true;};
  }

  return ['path' => $path, 'controller' => new $controller, 'method' => $method, 'condition' => $condition];
}

// Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.
$routeMap = array(
  //<pageName> => route(<ControllerName from controller php file>, <ControllerClassName in controller file>, <action to invoke when we jump to this site>, <condition to check before navigate to>)
  "home" => route('controllers/home_controller.php', 'HomeController', 'index'), //Home page
  "login" => route('controllers/auth_controller.php', 'AuthController', 'login'), //Login
  "register" => route('controllers/auth_controller.php', 'AuthController', 'register'), //Register
  'details' => route('controllers/product_controller.php', 'ProductController', 'details', function () { //Game Details
    return isset($_GET['id']) && $_GET['id'] != '';
  }),
  'products' => route('controllers/product_controller.php', 'ProductController', 'products'),
  "error" => route('controllers/base_controller.php', 'BaseController', 'error') //Error page  
);


