<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/assets/img/favicon.png') }}">
    <title>CLIMB :: pagar MercadoPago </title>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    

</head>

<body>
    
@php
// SDK de Mercado Pago
require base_path('/vendor/autoload.php');
// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-1782908899890379-092218-82bf271f7189f4eb1668ac84bc73f0ea-33894200');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = $titulo;
$item->quantity = 1;
$item->unit_price = $monto;
$preference->items = array($item);

$preference->back_urls = array(
    "success" => "http://climbescuela.rail.ar/comprar/$id/edit?viene=k78kl7654",
    "failure" => "http://climbescuela.rail.ar/comprar/$id/edit?viene=k78kl7655",
    "pending" => "http://climbescuela.rail.ar/comprar/$id/edit?viene=k78kl7655"
);

$preference->auto_return = "approved";
$preference->save();

@endphp
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
    // Agrega credenciales de SDK
      const mp = new MercadoPago('TEST-624bfaab-1ca5-4d31-853b-c3e09a2b1849', {
            locale: 'es-AR'
      });
    
      // Inicializa el checkout
      const checkout = mp.checkout({
          preference: {
              id: '{{$preference->id}}'
          },
          autoOpen: true,
          
    });
    </script>
</body>

</html>
