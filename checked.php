<?php

session_start();
session_regenerate_id(true);

$name = "Maba";
$password = "maba123";

if(isset($_SESSION["name"]) && isset($_SESSION["password"])) {
    if($_SESSION["name"] == $name && $_SESSION["password"] == $password) {
        var_dump($_SESSION["name"], $_SESSION["password"]);
    } else {
        echo"deu algum erro. ";
    }
}
  
?>

