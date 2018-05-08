<?php

$conn = mysqli_connect('localhost', 'root', '', 'form');

if (!$conn) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
exit();
}

?>