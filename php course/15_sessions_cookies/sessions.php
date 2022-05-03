<?php
    session_start();

    $_SESSION['page_couter'] = $_SESSION['page_couter'] ?? 0;

    $_SESSION['page_couter']++;

    var_dump($_SESSION['page_couter']);

    
    $pageCounter = $_SESSION['page_couter'] ?? 0;
    if($_SESSION['page_couter'] === 10){
        echo '<h1>Thanks for visiting us 10 times</h1>';
        $pageCounter = $_SESSION['page_couter'];
        session_unset();
        session_destroy();
    }

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
    <h1>first page</h1>
    <h1><?php echo 'Page visited '. $pageCounter . ' times' ?></h1>
</body>
</html>