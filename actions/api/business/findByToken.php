<?php

$conn  = conn();
$db    = new Database($conn);

$token = $_POST['token'];
$note  = $_POST['note'];

$db->query = "SELECT business.*, packages.name package_name, packages.note note FROM business JOIN packages ON packages.id = business.package_id WHERE packages.note = '$note' AND business.token = '$token'";
$business = $db->exec('single');

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