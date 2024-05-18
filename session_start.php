<?php

session_set_cookie_params(["httponly" => true]);
session_start();
var_dump(session_id());

$name = "Maba";
$password = "maba123";

$_SESSION["name"] = $name;
$_SESSION["password"] = $password;

if($_SESSION["name"] == "Maba" && $_SESSION["password"] == "maba123") {
    header("location: checked.php");
    exit();
} else {
    echo"infelizmente deu erro. ";
}

?>
