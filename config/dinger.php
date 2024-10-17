<?php

return [
    'public_key' => env('DINGER_MERCHANT_PUBLIC_KEY', 'Dinger merchant public key'),
    'merchant_api_key' => env('DINGER_MERCHANT_API_KEY', 'Dinger merchant api key'),
    'project_name' => env('PROJECT_NAME', 'Dinger project name'),
    'merchant_name' => env('MERCHANT_NAME', 'Dinger merchant name'),
    'dinger_staging_url' => env('DINGER_STAGING_URL', 'Dinger staging url'),
    'dinger_production_url' => env('DINGER_PRODUCTION_URL', 'Dinger Production url')
];
