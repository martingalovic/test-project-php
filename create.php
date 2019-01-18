<?php

$app = require "./core/app.php";

// Create new instance of user
$user = new User($app->db);
$data = [
    'name' => array_get($_POST, 'name'),
    'email' => array_get($_POST, 'email'),
    'city' => array_get($_POST, 'city'),
    'phone' => array_get($_POST, 'phone')
];

// Create validator
$validator = new Valitron\Validator($data);
$validator->rules([
    'required' => ['name', 'email', 'city', 'phone'],
    'email' => ['email'],
    'lengthBetween' => [
        ['name', 1, 30],
        ['city', 1, 50],
    ],
    'alphaNum' => ['phone']
]);

$response = [
    'success' => false,
    'errors' => [],
];

if ($validator->validate()) {
    // Insert it to database.php with POST data
    $user->insert($data);

    $response['success'] = true;

    // render tbody
    $users = User::find($app->db,'*');
    ob_start();
    include APP_ROOT . '/partials/users/table.php';
    $tbody = ob_get_contents();
    ob_end_clean();

    $response['tbodyHtml'] = $tbody;
} else {
    // Catch validation error
    $response['errors'] = $validator->errors();
}

// Render json response
return jsonResponse($response, $response['success'] ? 200 : 422);

// Redirect back to index
//header('Location: index.php');