<?php
session_start();

echo "Welcome " . $_SESSION['user'];

echo "<br>";
?>
<html>
<body>
<a href = "logout.php"> Logout </a>
</body>
</html>