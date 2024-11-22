<?php

return [
    'paths' => ['api/*', 'login'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:3000', 'http://127.0.0.1:8080'], // Adjust this to your frontend's URL for better security
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];