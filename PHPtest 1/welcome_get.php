<?php
session_start();
?>
<html>
<body>

<?php
echo "Hej " . $_GET['fornavn'] . " " . $_GET['efternavn'];
echo "<br>";
// Echo session variables that were set on previous page
echo "Fornavn er " . $_SESSION["fornavn"] . ".<br>";
echo "Efternavn er " . $_SESSION["efternavn"] . ".";
?>

</body>
</html>