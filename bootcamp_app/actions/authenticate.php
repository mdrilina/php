<?php

if (isset($_REQUEST['sid']) &&
    $_REQUEST['sid'] === $sid &&
    isset($_REQUEST['username']) &&
    isset($_REQUEST['password']) &&
    $_REQUEST['username'] == "cemeris" &&
    $_REQUEST['password'] == "123"
) {
    $_SESSION['username'] = $_REQUEST['username'];
    $_SESSION['password'] = $_REQUEST['password'];

    header("Location: index.php");
}
else {
    header("Location: index.php?page=login");
}