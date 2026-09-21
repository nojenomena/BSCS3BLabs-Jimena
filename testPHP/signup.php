<?php
    include("db.php");

    $errors=[];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['username'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirm_password'];

        if(strlen($name) <=0){
            $errors[] = "Username must be equal or greater than 8 characters";
        } else if(empty($name)){
            $errors[] = "Username cannot be empty";
        }

        $sql = "SELECT 'username' FROM 'users' WHERE 'username' = $name";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $errors[] = "Username already exists"; 

        }

        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

        if(empty($errors)){
            $sql = "INSERT INTO 'users' ('username', 'password') VALUES ('$name', '$passwordHashed')";
            $conn->query($sql);
            echo  "User created successfully";
        }

        $pattern = '/^ (?=.*[A-Z]) (?=.*[a-z]) (?=.*[\W_]).+ $/';
        // ?= means to check ahead
        // .* means "if there is any"
        // \W all special chars not including underscore
        // (?=.*[A-Z]) is a whole special condition statement

        if($password != $confirmPass){
            $errors[] = "Password did not match";
        }

        if(!preg_match($pattern, $password)){
            $errors[] = "Password must contain a higher and lower case character, and a special character";
        }
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
    <form method="POST">
        <label for="username">Username:
            <input type="text" id="username" name="username" placeholder="Enter Username">
        </label>
        <label for="password">Password:
            <input type="text" id="password" name="password" placeholder="Enter Password">
        </label>
        <label for="confirm_password">Confirm Password:
            <input type="text" id="confirm_password" name="confirm_password" placeholder="Enter Password">
        </label>
        <button type="submit">Submit</button>
    </form>

    <?php
        foreach($errors as $error){
            echo $error."<br>";
        }
    ?>
</body>
</html>