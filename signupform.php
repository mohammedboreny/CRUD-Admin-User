<?php

require_once('Connection.php');

if (isset($_POST['signupform'])) {
    // echo 'Form Submitted';
    $email = $_POST["email"];
    $mobNumber = $_POST["mobNumber"];
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $familyName = $_POST["familyName"];
    $pass = $_POST["pass"];
    $DOB = $_POST['DOB'];


    $sql = "INSERT INTO `usercreate`(`email`, `phoneNumber`, `firstName`, `middleName`, `lastName`, `familyName`, `pass`, `date`)
     VALUES ('$email','$mobNumber','$firstName','$middleName','$lastName','$familyName','$pass','$DOB')";
    if ($con->query($sql) === TRUE) {
        header("Location: ./welcomepage.php?email='$email'");
        echo "User Successfully Added";
    } else {
        echo "Something Went Wrong";
    }
} else {
    echo "Kindly, Check The required fields again.";
}
