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

// const with define
// define('FIRST_NAME', 'Alex');
// define('STATUS_PAID', 'paid');
// define('AGE', 20);

// echo FIRST_NAME . '<br>';
// echo STATUS_PAID . '<br>';
// echo AGE . '<br>';

// echo defined('STATUS_PAID');
// echo defined('FIRST_NAME');
// echo defined('AGE');
// echo defined('SALARY') . '<br>';;


// // const with const

// const JOB = 'programmer';
// const SALARY = 2000;
// const NAME = 'DAN';

// echo JOB . '<br>';
// echo SALARY . '<br>';
// echo NAME . '<br>';

// echo __FILE__  . '<br>';

// echo __LINE__ . '<br>';



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


