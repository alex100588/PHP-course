<?php

define('STATUS_PAID', 'paid');
define('AGE', 22);
define('NAME', 'Alexandra');
define('DAYS_OF_YEAR', 365);
define('JOB', 'worker');

//echo defined('NAME');


const WEEKS = 4;
const FIRST_JOB = 'programmer';
const SECOND_JOB =  'web dev';

echo PHP_VERSION;

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
    <h1><?php echo STATUS_PAID ?></h1>
    <h1><?php echo AGE ?></h1>
    <h1><?php echo NAME ?></h1>
    <h2><?php echo DAYS_OF_YEAR ?></h2>
    <h2><?php echo WEEKS ?></h2>
    <h2><?php echo FIRST_JOB, '<br>', SECOND_JOB ?></h2>
   
</body>
</html>


