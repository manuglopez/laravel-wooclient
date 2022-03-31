<?php

//For params config see https://woocommerce.com/document/woocommerce-rest-api/
return [
    'woocommerce_url'=>env('WOOCOMMERCE_URL'),
    'ck'=>env('WOOCOMMERCE_CK'),
    'cs'=>env('WOOCOMMERCE_CS'),
    'options'=>[
        'version' => 'wc/v3',
        'verify_ssl' => false
    ]
];