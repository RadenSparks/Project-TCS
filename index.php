<?php
require_once('connection.php');

$page = isset($_GET['page']) ? $_GET['page'] : '';

require_once('routes.php');

//Nếu tham số page không tồn tại trong $routeMap
if ($page == '') {
    $page = 'home';
  }
  
  //Nếu page được map vào routeMap
  if (!array_key_exists($page, $routeMap)) {
    $page = 'error';
  }
  
  //Nếu phướng thức không được map vào routeMap hoặc không có trong controller thì báo lỗi
  if (!in_array($routeMap[$page]['method'], get_class_methods($routeMap[$page]['controller']))) {
    $page = 'error';
  }
  
  // include_once('controllers/' . $page . '_controller.php');
  // Tạo ra tên controller class từ các giá trị lấy được từ URL sau đó gọi ra để hiển thị trả về cho người dùng.
  $calledMethod = $routeMap[$page]['method'];
  $routeMap[$page]['controller']->$calledMethod();
?>