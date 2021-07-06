
<?php

// define > navlinks` states
$state = [
    'index'  => 'inactive',
    'add'    => 'inactive',
    'edit'   => 'inactive',
    'delete' => 'inactive'
];
// get > current page
$page = $_SERVER['REQUEST_URI'];

// set > active navlink state
if( str_contains($page , 'index') )  $state['index']  = 'active';
if( str_contains($page , 'add') )    $state['add']    = 'active';
if( str_contains($page , 'edit') )   $state['edit']   = 'active';
if( str_contains($page , 'delete') ) $state['delete'] = 'active';

$menu = <<< MENU
<a href = 'index.php'     data-state = {$state['index']}  class = 'navlink'>View</a>
<a href = 'add.php'       data-state = {$state['add']}    class = 'navlink'>Add</a>
<a href = 'edit_list.php' data-state = {$state['edit']}   class = 'navlink'>Edit</a>
<a href = 'delete.php'    data-state = {$state['delete']} class = 'navlink'>Delete</a>
MENU;

return $menu;