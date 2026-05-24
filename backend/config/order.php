<?php

return [
    'cargo' => [
        'threshold' => env('ORDER_CARGO_THRESHOLD', 40000), // cent
        'price' => env('ORDER_CARGO_PRICE', 5000), // cent
    ],
];
