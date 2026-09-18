<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('index.css')?>">
    
    <title>Landing Page</title>
</head>
<body>
    <header>
        <a href=<?php echo site_url('/')?>>Home</a>
        <a href=<?php echo site_url('about')?>>About</a>
        <a href=<?php echo site_url('customers')?>>Customers</a>
        <a href=<?php echo site_url('users')?>>Users</a>
    </header>

    <div class="container">
        <h1>WELCOME TO THE POS SYSTEM</h1>
        <div class="row">
            <a href=<?php echo site_url('customers')?> class="button1" style="text-align: center;">customers</a>
            <a href=<?php echo site_url('users')?>  class="button2" style="text-align: center;">users</a>
            <br>
        </div>


    </div>
</body>
</html>