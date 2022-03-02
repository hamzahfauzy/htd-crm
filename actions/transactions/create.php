<?php

$conn = conn();
$db   = new Database($conn);

$user_id = auth()->user->id;

$customers = $db->all('customers');
$business = []; 
$customer_id = $_GET['customer_id'] ?? 0;
if(isset($_GET['customer_id']) && !empty($_GET['customer_id']))
{
    $business = $db->all('business',[
        'customer_id' => $_GET['customer_id']
    ]);
}

if(request() == 'POST')
{
    if(isset($_FILES['proof_file']) && $_FILES['proof_file']['name']){

        $target_dir = "uploads/";
        $target_file = $target_dir . strtotime("now") . "-" . $_FILES["proof_file"]["name"];

        if(move_uploaded_file($_FILES["proof_file"]["tmp_name"], $target_file)){
            $_POST['transactions']['proof_file'] = $target_file;
        }
    }

    $_POST['transactions']['status'] = 'pay';
    $db->insert('transactions',$_POST['transactions']);
    set_flash_msg(['success'=>'Transaksi berhasil ditambahkan']);
    header('location:index.php?r=transactions/index');

}

return compact('customers','business','customer_id');