<?php

class webpayController{

  public function index()
  {
    $stats = Utils::statsCarrito();
    $coste = $stats['total'];
    require_once 'views/webpay/index.php';
  }
  public function inicioPago()
  {
    $stats = Utils::statsCarrito();
    $coste = $stats['total'];

    require_once 'views/webpay/inicioPago.php';

  }
  public function response()
  {
    $stats = Utils::statsCarrito();
    $coste = $stats['total'];
    // unset($_SESSION['carrito']);
    require_once 'views/webpay/response.php';



  }
  public function finish()
  {


    require_once 'views/webpay/finish.php';




  }

  // public function addCarrito()
  // {
  //
  //
  // }
}
