<?php
    $hiddenGreeting = "Mamaaaaaaaaaaaaaaa";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Midterm</title>
</head>
<body>
    <div class="container text-center">
        <div class="container-sm" style="text-align: center; margin-top: 200px;">
            <h1>Welcome Visitor</h1>
            <p>This page will greet you with a message.</p>
            <h2 id="hiddenGreeting" style="margin-top: 50px; color: red;"></h2>
            <button id="button" class="btn btn-primary" onclick="showMessage()">Show Message</button>
        </div>
        <div class="container-sm" style="text-align: center; margin-top: 100px; ">
            <h1 style="text-align: left">Technologies Used</h1>
            <table class="table table-striped table-hover table-bordered table-responsive" style="text-align: left;">
                <thead>
                    <tr>
                        <th scope="col">Technologies Used</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>HTML</th>
                        <td>I used HTML for building the overall structure of the website</td>
                    </tr>
                    <tr>
                        <th>PHP</th>
                        <td>I used PHP to handle variable usage and calling</td>
                    </tr>
                    <tr>
                        <th>Java</th>
                        <td>I used Java in creating the function for the button to show the hidden greeting</td>
                    </tr>
                    <tr>
                        <th>Bootstrap</th>
                        <td>I used Bootstrap in designing the frontend of the website</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>

        function showMessage() {
            document.getElementById("hiddenGreeting").innerText = "<?php echo $hiddenGreeting; ?>";
            document.getElementById("button").style.display = "none";        
        }
        
    </script>
    
</body>
</html>