<?php
    session_start();

    $name = "";
    $password = "";

    $text = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['username'];
        $password = $_POST['password'];

        $_SESSION['username'] = $name;

        header("Location: index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>SIGN UP</h1>
    <form>
        <label for="username">Username:
            <input type="text" id="username" name="username" placeholder="Enter Username">
        </label>
        <label for="password">Password:
            <input type="text" id="password" name="password" placeholder="Enter Password">
        </label>
        <button type="submit">Submit</button>
    </form>
</body>
</html>