 <?php

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("APP_USR-6588866596068053-041607-428a530760073a99a1f2d19b0812a5b6-491494389");

    switch($_GET["type"]) {
        case "payment":
            $plan = MercadoPago\Payment.find_by_id($_GET["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_GET["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_GET["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_GET["id"]);
            break;
    }
    //print_r($plan);
    echo "id ".$_GET["id"];

?>