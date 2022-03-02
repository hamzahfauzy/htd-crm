<?php

if(request() == 'POST')
{
    $conn = conn();
    $db   = new Database($conn);

    $db->insert('packages',$_POST['packages']);

    set_flash_msg(['success'=>'Paket berhasil ditambahkan']);
    header('location:index.php?r=packages/index');
}