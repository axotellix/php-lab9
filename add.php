
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
    
        <form action="database/queries/add.php" method = 'POST'>
        
            <h2>Add new record:</h2>
            
            <label for="f_name">First name:</label>
            <input type="text" name = 'f_name'   placeholder="First name ..." />
            
            <label for="s_name">Second name:</label>
            <input type="text" name = 's_name'   placeholder="Second name ..." />
            
            <label for="t_name">Third name:</label>
            <input type="text" name = 't_name'   placeholder="Third name ..." />
            
            <label for="gender">Gender:</label>
            <input type="text" name = 'gender'   placeholder="Gender ..." />
            
            <label for="birthday">Birthday:</label>
            <input type="text" name = 'birthday' placeholder="Birthday ..." />
            
            <label for="phone">Phone:</label>
            <input type="text" name = 'phone'    placeholder="Phone ..." />
            
            <label for="address">Address:</label>
            <input type="text" name = 'address'  placeholder="Address ..." />
            
            <label for="email">Email:</label>
            <input type="text" name = 'email'    placeholder="Email ..." />
            
            <label for="comment">Comment:</label>
            <input type="text" name = 'comment'  placeholder="Comment ..." />

            <button>ADD</button>
        
        </form>

    </main>

</body>
</html>