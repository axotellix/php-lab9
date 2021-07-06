
<?php

// [ IMPORTS ]
require( __DIR__ . '/../schema.php' );

// get > data
$id = $_GET['id'] ?? '';

// delete > record
Schema::table('students')->delete('id', '=', $id);

// redirect > to home page
header('Location: ../../index.php');