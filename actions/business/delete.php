<?php

$conn = conn();
$db   = new Database($conn);

$db->delete('business',[
    'id' => $_GET['id']
]);

set_flash_msg(['success'=>'Bisini berhasil dihapus']);
header('location:index.php?r=business/index');
die();