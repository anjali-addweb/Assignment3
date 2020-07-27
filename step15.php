<?php


$password = 'task12';


$passwordHashed = password_hash($password, PASSWORD_BCRYPT);


echo $passwordHashed;

?>