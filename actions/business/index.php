<?php

$conn = conn();
$db   = new Database($conn);
$success_msg = get_flash_msg('success');

$db->query = "SELECT business.*, customers.name customer_name, packages.name package_name FROM business JOIN customers ON customers.id = business.customer_id JOIN packages ON packages.id = business.package_id";
$datas = $db->exec('all');

return compact('datas','success_msg');