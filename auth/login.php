<?php

include "../connect.php";


$password = sha1('password');
$email = filterRequest('email');


$stmt = $con->prepare('SELECT * FROM users WHERE users_email = ? OR users_password = ?');
$stmt->execute(array($email, $password));
$count = $stmt->rowCount();
result($count);
?>