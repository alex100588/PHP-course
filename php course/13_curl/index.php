<?php



$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
$resorce = curl_init($url);

curl_setopt($resorce, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($resorce);
$info = curl_getinfo($resorce, CURLINFO_HTTP_CODE);
print_r($info);
curl_close($resorce);
// Get response status code

// set_opt_array

$resource = curl_init();
// Post request
$user = [
    'name' => 'Jhon Doe',
    'username' => 'jhon',
    'email' => 'jhon@example.com'
];


curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resorce);
curl_close($resorce);
echo $result;
