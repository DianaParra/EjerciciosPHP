<?php

session_start();
$_SESSION['usuario']="admin";
$_SESSION['contraseña']="1234";
echo '

<html>
<head>
<meta http-equiv="REFRESH" content="0;url=principal.php">
</head>
</html>
';


?>