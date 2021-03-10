<?php
// Start the session
session_start();
?>
<html>
<body>

<?php
// Set session variables
$_SESSION["fornavn"] = "Karsten";
$_SESSION["efternavn"] = "Blockholm";
echo "Session variables are set.";
?>

<a href="welcome_get.php?fornavn=Karsten&efternavn=Blockholm">Test $GET</a>

</body>
</html>