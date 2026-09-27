<?php
    include 'db.php';

    $name = "";
    $password = "";
    $confirm_password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[\W_]).+$/';

        if ($password === $confirm_password){
            if (preg_match($pattern, $password)){
                insertInto($name, $password);    
            } else {
                $text[] = "Password must contain at least: 1 Capital letter, 1 Small letter, 1 Special Character";
            }
                
        } else {
            $text[] = "Passwords do not match!";
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
            <input type="password" id="password" name="password" placeholder="Enter Password">
        </label>
        <label for="confirm_password">Confirm Password:
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter Password">
        </label>
        <button type="submit">Submit</button>
    </form>
    <a href="index.php">Go Back</a>
    <?php
        if (!empty($text)){
            foreach ($text as $t){
                echo $t . "<br>";
            }
        }
    ?>
</body>
</html>