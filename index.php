<?php
require_once('connection.php');

$site = isset($_GET['site']) ? $_GET['site'] : '';

require_once('routes.php');

//Nếu tham số site không tồn tại trong $routeMap
if ($site == '') {
    $site = 'home';
  }
  
  //Nếu site được map vào routeMap
  if (!array_key_exists($site, $routeMap)) {
    $site = 'error';
  }
  
  //Nếu phướng thức không được map vào routeMap hoặc không có trong controller thì báo lỗi
  if (!in_array($routeMap[$site]['method'], get_class_methods($routeMap[$site]['controller']))) {
    $site = 'error';
  }
  
  // Tạo ra tên controller class từ các giá trị lấy được từ URL sau đó gọi ra để hiển thị trả về cho người dùng.
  $calledMethod = $routeMap[$site]['method'];
  $routeMap[$site]['controller']->$calledMethod();
?>