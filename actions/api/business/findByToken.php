<?php

$conn  = conn();
$db    = new Database($conn);

$token = $_GET['token'];

$business = $db->single('business',[
    'token' => $token
]);

if(!$business)
{
    echo json_encode([
        'message' => 'business not found.',
        'status'  => 'fail',
        'data'    => []
    ]);
    die;
}

echo json_encode([
    'message' => 'business retrieve.',
    'status'  => 'success',
    'data'    => $business
]);
die;