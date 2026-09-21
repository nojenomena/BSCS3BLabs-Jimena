<?php
    session_start();

    $name = "Jeno";
    $password = 123;

    $text = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($name == $username && $password == $password){
            $_SESSION['username'] = $username;
        
            header("Location: dashboard.php");
            exit();
        } else {
            $text = "eeeeeengoooottt";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container">
            <h1 class="text-center mt-5">Log In</h1>
            <div class="d-flex flex-column align-items-center justify-content-center mt-5">
            <form method="POST">
                <label for="username">Enter username:
                    <input type="text" id="username" name="username" placeholder="Username">
                </label>
                <label for="password">Enter password:
                    <input type="text" id="password" name="password" placeholder="Password">
                </label>
                <button type="submit">Submit</button>
            </form>
            <h1 style="color:red">
                <?php echo $text; ?>
            </h1>
            <a href = "signup.php">Sign Up</a>
            </div>
    </div>
</body>
</html>