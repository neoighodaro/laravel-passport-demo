<?php

require "vendor/autoload.php";

$client = new GuzzleHttp\Client;

try {
    $response = $client->post('http://todos.dev/oauth/token', [
        'form_params' => [
            'client_id' => 2,
            // The secret generated when you ran: php artisan passport:install
            'client_secret' => 'fx5I3bspHpnuqfHFtvdQuppAzdXC7nJclMi2ESXj',
            'grant_type' => 'password',
            'username' => 'johndoe@scotch.io',
            'password' => 'secret',
            'scope' => '*',
        ]
    ]);

    // You'd typically save this payload in the session
    $auth = json_decode( (string) $response->getBody() );

    $response = $client->get('http://todos.dev/api/todos', [
        'headers' => [
            'Authorization' => 'Bearer '.$auth->access_token,
        ]
    ]);

    $todos = json_decode( (string) $response->getBody() );

    $todoList = "";
    foreach ($todos as $todo) {
        $todoList .= "<li>{$todo->task} ".($todo->done ? '' : '✅')."</li>";
    }

    echo "<ul>{$todoList}</ul>";

} catch (GuzzleHttp\Exception\BadResponseException $e) {
    echo "Unable to retrieve access token.";
}
