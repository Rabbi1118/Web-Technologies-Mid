<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $isValid = true;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usernameError = $passwordError = "";
    $errorMessage = "";

    if (empty($username)) {
        $usernameError = "Username Required!";
        $isValid = false;
    }
    if (empty($password)) {
        $passwordError = "Password Required!";
        $isValid = false;
    }
    if ($isValid) {
        $result = isValidCredentials($username, $password);
        if ($result) {
            $loggedInUser = fetch($username, $password);
            session_start();
            $_SESSION['username'] = $loggedInUser->username;
            header("Location: ../views/Admin-Dashboard.php");
        } else {
            $errorMessage = "Invalid Input!";
        }
    }
}

function read()
{
    $filename = '../models/admin.json';
    $fo = fopen($filename, 'r');
    $fz = filesize($filename);
    $data = array();
    if ($fz > 0) {
        $fr = fread($fo, $fz);
        $data = json_decode($fr);
    }
    fclose($fo);
    return $data;
}

function isValidCredentials($username, $password)
{
    $found = false;
    $users = read();
    if (count($users) > 0) {
        for ($i = 0; $i < count($users); $i++) {
            if ($users[$i]->username === $username and $users[$i]->password === $password) {
                $found = true;
                break;
            }
        }
    }
    return $found;
}

function fetch($username, $password)
{
    $users = read();
    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]->username === $username and $users[$i]->password === $password) {
            return $users[$i];
        }
    }
    return array();
}
