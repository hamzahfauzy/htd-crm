<?php

$conn = conn();
$db   = new Database($conn);
$customers = $db->all('customers');
$packages = $db->all('packages');

if(request() == 'POST')
{
    $package = $db->single('packages',['id'=>$_POST['business']['package_id']]);
    $subscription_time = $package->subscription_time == 'Bulanan' ? '+30 day' : '+1 year';
    $_POST['business']['started_at'] = date('Y-m-d H:i:s');
    $_POST['business']['expired_at'] = date('Y-m-d H:i:s', strtotime($subscription_time));
    $db->insert('business',$_POST['business']);

    set_flash_msg(['success'=>'Bisnis berhasil ditambahkan']);
    header('location:index.php?r=business/index');
}

return compact('customers','packages');