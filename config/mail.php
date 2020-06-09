<?php

return [
  
    'driver' => env('MAIL_DRIVER', 'smtp'),

    'host' => env('MAIL_HOST','mail45.lwspanel.com'),

    'port' => env('MAIL_PORT', 587),

    'from' => ['address' => 'info@ivoiresn.com', 'name' => 'ivoiresn'],

    'encryption' => env('tls'),

    'username' => env('MAIL_USERNAME'),
   
    'password' => env('MAIL_PASSWORD'),

    'sendmail' => '/usr/sbin/sendmail -bs',

];
