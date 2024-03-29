<?php
require_once('controllers/base_controller.php');

class WishlistController extends BaseController
{
  function __construct()
  {
    parent::__construct();
  }

  //Function name: you can name as what you want
  //$this->render('home') : mean you will render the home.php file in views/pages/home.php
  //Make sure that file exists
  public function wishlist()
  {
    $this->render('wishlist');
  }  
}