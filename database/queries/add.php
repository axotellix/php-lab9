
<?php

// [ IMPORTS ]
require( __DIR__ . '/../schema.php' );

// get > data
$f_name   = $_POST['f_name'] ?? ''; 
$s_name   = $_POST['s_name'] ?? ''; 
$t_name   = $_POST['t_name'] ?? ''; 
$gender   = $_POST['gender'] ?? ''; 
$birthday = $_POST['birthday'] ?? ''; 
$phone    = $_POST['phone'] ?? ''; 
$address  = $_POST['address'] ?? ''; 
$email    = $_POST['email'] ?? ''; 
$comment  = $_POST['comment'] ?? ''; 

// save > data
Schema::table('students')->add([
    'first_name'  => $f_name, 
    'second_name' => $s_name,
    'third_name'  => $t_name,
    'gender'      => $gender,
    'birthday'    => $birthday,
    'phone'       => $phone,
    'address'     => $address,
    'email'       => $email,
    'comment'     => $comment,
]);

// redirect > to home page
header('Location: ../../index.php');