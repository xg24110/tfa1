<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <title>Landing Page</title>
</head>
<body>
    <a href=<?php echo site_url('/')?>>Home</a>
    <a href=<?php echo site_url('about')?>>About</a>
    <a href=<?php echo site_url('customers')?>>Customers</a>
    <a href=<?php echo site_url('users')?>>Users</a>
    <div class="container">
        <h1 style="text-align: center;">WELCOME TO THE POS SYSTEM</h1>
        <div class="row">
            <a href=<?php echo site_url('about')?> style="text-align: center;">about</a>
            <br>
            <a href=<?php echo site_url('customers')?> style="text-align: center;">customers</a>
            <br>
            <a href=<?php echo site_url('users')?> style="text-align: center;">users</a>
            <br>
        </div>


    </div>
</body>
</html>