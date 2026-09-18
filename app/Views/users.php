<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('index.css')?>">
    
    <title>Customers</title>
</head>
<body>
    <div class="nh">
        <header>
            <a href=<?php echo site_url('/')?>>Home</a>
            <a href=<?php echo site_url('about')?>>About</a>
            <a href=<?php echo site_url('customers')?>>Customers</a>
            <a href=<?php echo site_url('users')?>>Users</a>
        </header>
    </div>
    
    <h1 style="text-align:center">USERS</h1>
    <div class="container">
        <table>
            <tr>
                <th>NAME</th>
                <th>AGE</th>
                <th>ROLE</th>
            </tr>
            <?php foreach($users as $ru): ?>
                <tr>
                    <td><?php echo esc($ru['name'])?></td>
                    <td><?php echo esc($ru['age'])?></td>
                    <td><?php echo esc($ru['role'])?></td>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</body>
</html>