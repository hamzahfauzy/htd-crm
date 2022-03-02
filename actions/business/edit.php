<?php

$conn = conn();
$db   = new Database($conn);

$customers = $db->all('customers');
$packages = $db->all('packages');

if(request() == 'POST')
{

    $update = $db->update('customers',$_POST['customers'],[
        'id' => $_GET['id']
    ]);

    set_flash_msg(['success'=>'Paket berhasil diupdate']);
    header('location:index.php?r=customers/index');
}

return compact("data","packages");