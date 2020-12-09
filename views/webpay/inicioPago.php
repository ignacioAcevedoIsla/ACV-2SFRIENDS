
<h1>pago en accion</h1>


<?php
use Freshwork\Transbank\CertificationBagFactory;
use Freshwork\Transbank\TransbankServiceFactory;
include 'vendor/autoload.php';
$bag = \Freshwork\Transbank\CertificationBagFactory::integrationWebpayNormal();


$webpay=TransbankServiceFactory::normal($bag);

$webpay->addTransactionDetail($coste,'Orden824201');



// Debes además, registrar las URLs a las cuales volverá el cliente durante y después del flujo de Webpay
$response = $webpay->initTransaction('http://localhost/veterinaria/webpay/response', 'http://localhost/veterinaria/webpay/finish');

// Utilidad para generar formulario y realizar redirección POST
echo \Freshwork\Transbank\RedirectorHelper::redirectHTML($response->url, $response->token);



?>
