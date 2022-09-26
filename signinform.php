<?php
if (isset($_POST['signinform'])) {
    require_once 'Connection.php';
    $email = $_POST['semail'];
    $pass = $_POST['spass'];

    print_r($email . $pass);
} else {
    # code...
}
