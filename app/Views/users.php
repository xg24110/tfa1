<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <title>Customers</title>
</head>
<body>
    <a href=<?php echo site_url('/')?>>Home</a>
    <a href=<?php echo site_url('about')?>>About</a>
    <a href=<?php echo site_url('customers')?>>Customers</a>
    <a href=<?php echo site_url('users')?>>Users</a>
    <div class="container">
        <h1 style="text-align: center;">LIST OF USERS</h1>

        <?php
            foreach($users as $ru){
                echo $ru."<br>";
            }
        ?>
    </div>
</body>
</html>