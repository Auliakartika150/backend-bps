<?php
// config/cors.php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout'], // Pastikan path login/logout ada jika kamu punya route khusus

    'allowed_methods' => ['*'],

    // Ganti ini
    // 'allowed_origins' => ['*'],
    // Menjadi ini (menggunakan environment variable agar fleksibel)
    'allowed_origins' => explode(',', env('FRONTEND_URL', 'http://localhost:3000')),

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    // Ini yang paling penting, ubah dari false menjadi true
    'supports_credentials' => true,
];
