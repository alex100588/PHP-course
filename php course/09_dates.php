<?php

// Print current date
echo 'Today is: '. date('y - m - d h:i:s') . '<br>';
echo 'Today is: '. date('Y - M - D H:i:s') . '<br>';
echo 'Today is: '. date('D - M - Y ') . 'and the time is '. date('H : i : s') . '<br>';
// Print yesterday
echo 'Yesterday was: ' . date('y m d H:i:s', time()  - 60 / 60-24) . '<br>';


// Print current timestamp
echo time() /60/60/24/30/12 . '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php

// $parseDate = date_parse('2022-04-13');
// print_r($parseDate);

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
