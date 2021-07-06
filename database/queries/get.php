
<?php

// [ IMPORTS ]
require( __DIR__ . '/../schema.php' );

$records = Schema::table('students')->all()->get();
