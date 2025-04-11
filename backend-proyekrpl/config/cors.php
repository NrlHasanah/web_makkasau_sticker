<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'], // Anda bisa mempersempit jika hanya menggunakan metode tertentu seperti GET, POST, dll.
    'allowed_origins' => ['*'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // Diperlukan jika menggunakan autentikasi berbasis cookies atau header Authorization
];