<?php

//set a cookie
setcookie('key', 'value', time()+60);

//update a cookie

setcookie('key', 'value[updated]', time()+3600);

//delete a cookie

setcookie('key', '', time()-1);

?>