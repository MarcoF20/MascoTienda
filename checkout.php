<?php
require_once './vendor/autoload.php';
require_once './secrets.php';
\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');

$totalPrice = $_POST['totalPrice'];

$YOUR_DOMAIN = 'http://localhost:3000';


$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [
    [
      'price_data' => [
        'currency' => 'mxn',
        'unit_amount' => $totalPrice+00,  // Precio en centavos ($19.99)
        'product_data' => [
          'name' => 'Pedido de MascoTienda',
          'description' => 'Tu pedido de MascoTienda',
          // Otros campos de información del producto 1
        ],
      ],
      'quantity' => 1,  // Cantidad del producto 1
    ],

    
    // Agrega más elementos para más productos si es necesario
  ],
  
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/index.php',
  'cancel_url' => $YOUR_DOMAIN . '/index.php',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
?>