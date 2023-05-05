
<?php


include __DIR__ . '/functions.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="GET">

        <label for="word">enter your password length</label>
        <input type="number"  name="length" min="3" max="10" >
        
        <button type="submit">Create</button>
        
    </form>

    
</body>
</html>