<?php
require '../autoloader/loader.php';
$authenticate = new authenticate();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'userlogin':
            extract($_POST);
            if (empty(trim($username)) || empty(trim($password))) {
                echo "All fields required";
            }
            else{
                echo $authenticate->userlogin($username, $password);
            }
            break;

        case 'registeruser':
            extract($_POST);
            if (empty(trim($user_name)) || empty(trim($user_email))|| empty(trim($password)) || empty(trim($user_contact))) {
                echo "All fields required";
            }
            else{

                $key =[[ 'user_email', '=', $user_email],['user_contact' , '=', $user_contact]];
                    $target = [
                    'user_name'=>$user_name,
                    'user_email'=>$user_email,
                    'user_contact'=>$user_contact,
                    'company'=>$company,
                    'money_password'=>md5($password),
                    'state'=>'active',
                   
                    'date_created'=>date('Y-m-d H:i:s'),

                   
                ];
                echo $authenticate->userregister('users', $key, $target);
                // echo $authenticate->userregister('user_tbl', [['email','=',$email],['contact','=',$contact]], $target);
            }
            break;

    }
}