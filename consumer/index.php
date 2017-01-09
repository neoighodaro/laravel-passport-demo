<?php

require "vendor/autoload.php";

if ( ! isset($_GET['code'])) {

    $params = http_build_query([
        'client_id' => 1,
        'redirect_uri' => 'http://todoconsumer.dev',
        'response_type' => 'code',
    ]);

    header('Location: http://todos.dev/oauth/authorize?'.$params);
    exit;
}