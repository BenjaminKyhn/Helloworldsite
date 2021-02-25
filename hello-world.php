<html>
<body>

<?php
session_start();
$_SESSION["firstname"] = $_GET['firstname'];
$_SESSION["surname"] = $_GET['surname'];

echo "Hello " . $_SESSION["firstname"] . ' ' . $_SESSION["surname"];
?>

</body>
</html>