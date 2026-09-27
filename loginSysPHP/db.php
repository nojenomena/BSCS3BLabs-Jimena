<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "accounts_db";

    $text = [];

    $conn = new mysqli($server, $username, $password, $db);

    function insertInto(string $name, string $pass){
        global $conn, $text;

        if (!searchAcc($name)){
            $sql = "INSERT INTO accounts (name, password) VALUES ('$name', '$pass')";
            $result = $conn->query($sql);

            if ($result){
                $text[] = "Account registered successfully!";
            } else {
                $text[] = "Account registration failed!";
            }
        } else {
            $text[] = "Account already exists!";
        }
        
    }

    function searchAcc(string $name){
        global $conn;

        $sql = "SELECT name FROM accounts WHERE name = '$name'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            return true;
        } else {
            return false;
        }
    }

    function loginAuth(string $name, string $pass){
        global $conn;

        $sql = "SELECT * FROM accounts WHERE name = '$name' AND password = '$pass'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            return true;
        } else {
            return false;
        }
    }
?> 

