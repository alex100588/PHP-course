<?php
// Magic constants
echo __DIR__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __LINE__;
echo '<br>';

// Create directory
// mkdir('test');
// mkdir('alex');
// mkdir('newDir');

// Rename directory
// rename('test' ,'test2');
// rename('alex', 'samsonica');
// rename('newDir', 'nextDir');

// Delete directory
// rmdir('samsonica');
// rmdir('samsonica');
// rmdir('nextDir');

// Read files and folders inside directory


// $files = scandir('../');

// echo '<pre>';
// var_dump($files);
// echo '</pre>';

// file_get_contents, file_put_contents
// echo file_get_contents('lorem.txt') . '<br>';
// echo file_get_contents('lorem.txt') . '<br>';
// echo file_get_contents('lorem.txt') . '<br>';

// file_put_contents('sample.txt', 'Something new');
// echo file_get_contents('sample.txt');
// file_put_contents('newFile.txt', 'More content to read');
// echo file_get_contents('newFile.txt');

//file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');

$users = json_decode($usersJson);

print_r($users);

// https://www.php.net/manual/en/book.filesystem.php
