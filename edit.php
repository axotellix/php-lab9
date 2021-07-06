
<!-- [ PRESETS ] -->
<? 

    // get > edited record`s id
    $id = $_GET['id'] ?? '';

    // import > Schema lib
    require( __DIR__ . '/database/schema.php' );

    // get > edited record`s values
    $record = Schema::table('students')->all()->where('id', '=', $id)->get();

    // keep > edited record`s values (to then pass them into inputs)
    while( $row = $record->fetch(PDO::FETCH_OBJ) ) {
        $f_name   = $row->first_name; 
        $s_name   = $row->second_name; 
        $t_name   = $row->third_name; 
        $gender   = $row->gender; 
        $birthday = $row->birthday; 
        $phone    = $row->phone; 
        $address  = $row->address; 
        $email    = $row->email; 
        $comment  = $row->comment; 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- [ STYLES ] -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "styles/css/Normalize.css">
    <link rel="stylesheet" href="styles/css/styles.css">

    <title>Database</title>
</head>
<body>
     
    <!-- [ HEADER ]  -->
    <header>
        <?= require('templates/menu.php') ?>
    </header>

    <!-- [ MAIN ] -->
    <main>

        <form action="database/queries/edit.php" method = 'POST'>
        
            <input type="hidden" name = 'id'       value = "<?= $id ?>" />

            <label for="f_name">First name:</label>
            <input type="text"   name = 'f_name'   value = "<?= $f_name ?>"   placeholder="First name ..." />
            
            <label for="s_name">Second name:</label>
            <input type="text"   name = 's_name'   value = "<?= $s_name ?>"   placeholder="Second name ..." />
            
            <label for="t_name">Third name:</label>
            <input type="text"   name = 't_name'   value = "<?= $t_name ?>"   placeholder="Third name ..." />
            
            <label for="gender">Gender:</label>
            <input type="text"   name = 'gender'   value = "<?= $gender ?>"   placeholder="Gender ..." />
            
            <label for="birthday">Birthday:</label>
            <input type="text"   name = 'birthday' value = "<?= $birthday ?>" placeholder="Birthday ..." />
            
            <label for="phone">Phone:</label>
            <input type="text"   name = 'phone'    value = "<?= $phone ?>"    placeholder="Phone ..." />
            
            <label for="address">Address:</label>
            <input type="text"   name = 'address'  value = "<?= $address ?>"  placeholder="Address ..." />
            
            <label for="email">Email:</label>
            <input type="text"   name = 'email'    value = "<?= $email ?>"    placeholder="Email ..." />
            
            <label for="comment">Comment:</label>
            <input type="text"   name = 'comment'  value = "<?= $comment ?>"  placeholder="Comment ..." />

            <button>SAVE</button>
        
        </form>

    </main>

</body>
</html>