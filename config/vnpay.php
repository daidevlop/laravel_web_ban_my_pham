<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [
    'vnp_TmnCode' => env('VNP_TMN_CODE', 'YOUR_TMN_CODE'),
    'vnp_HashSecret' => env('VNP_HASH_SECRET', 'YOUR_HASH_SECRET'),
    'vnp_Url' => env('VNP_URL', 'https://sandbox.vnpayment.vn/paymentv2/vpcpay.html'), // URL sandbox
    'vnp_ReturnUrl' => env('VNP_RETURN_URL', 'http://yourwebsite.com/vnpay-return'), // URL trả về sau khi thanh toán
];

