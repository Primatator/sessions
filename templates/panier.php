<?php
require_once "tab.php";

if (isset($_SESSION["utilisateur"]))
{
    echo "<h2> Bonjour M.".$_POST['user']. "!<h2>";


}

?>
