<?php

require"includes/app.php";

$email="correo@gmail.com";
$password=password_hash("1234",PASSWORD_DEFAULT);

$query ="INSERT INTO  admins (nombre,passwords,email) VALUES('andre','${password}','${email}')";

mysqli_query($db,$query);
?>