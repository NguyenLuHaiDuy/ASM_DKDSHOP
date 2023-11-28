<?php

if (isset($_POST['dangky'])) {
    $username = $_POST['username'] ? trim($_POST['username']) : '';
    $password = ($_POST['password']) ? trim($_POST['password']) : '';
    $Email = ($_POST['Email']) ? trim($_POST['Email']) : '';
    if (empty($username)) {
        $errors['username'] = 'cannot be left blank';
    }
    if (empty($Email)) {
        $errors['Email'] = 'cannot be left blank';
    }
    if (empty($password)) {
        $errors['password'] = 'cannot be left blank';
    }
    if (empty($errors)) {

        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";
    }  
}
include "register.php";