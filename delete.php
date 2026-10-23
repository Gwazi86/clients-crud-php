<?php
if(isset($_GET["id"])) {
    $id = $_GET["id"];

    include "config.php";

    $sql = "DELETE FROM users WHERE id=$id";
    $connection->query($sql);
}

header("location: /clients/index.php");
exit;
?>