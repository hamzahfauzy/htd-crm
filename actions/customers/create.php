<?php

$conn = conn();
$db   = new Database($conn);
$user_id = auth()->user->id;

if(request() == 'POST')
{
    $_POST['users']['name'] = $_POST['customers']['name'];
    $_POST['users']['password'] = md5($_POST['users']['password']);
    $user = $db->insert('users',$_POST['users']);
    $db->insert('user_roles',[
        'user_id' => $user->id,
        'role_id' => 2
    ]);

    $_POST['customers']['user_id'] = $user_id;
    $db->insert('customers',$_POST['customers']);

    set_flash_msg(['success'=>'Kustomer berhasil ditambahkan']);
    header('location:index.php?r=customers/index');
}

return;