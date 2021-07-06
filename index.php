
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
    
    <?php
        // get > records (all)
        require('database/queries/get.php');

        // print > records
        echo "<ul>";
        while( $row = $records->fetch(PDO::FETCH_OBJ) ) {
            $record = <<< REC
            <div class = 'f-name'   data-type = 'first name'>$row->first_name</div>
            <div class = 's-name'   data-type = 'second name'>$row->second_name</div>
            <div class = 't-name'   data-type = 'third name'>$row->third_name</div>
            <div class = 'gender'   data-type = 'gender'>$row->gender</div>
            <div class = 'birthday' data-type = 'birthday'>$row->birthday</div>
            <div class = 'phone'    data-type = 'phone'>$row->phone</div>
            <div class = 'address'  data-type = 'address'>$row->address</div>
            <div class = 'comment'  data-type = 'comment:'>$row->comment</div>
            REC;

            echo "<li>$record</li>";
        }
        echo "</ul>"
    ?>

    </main>

</body>
</html>