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
    
    <h1 style="text-align:center">CUSTOMERS</h1>
    <div class="container">
        <table>
            <tr>
                <th>NAME</th>
                <th>AGE</th>
            </tr>
            <?php foreach($customers as $rc): ?>
                <tr>
                    <td><?php echo esc($rc['name'])?></td>
                    <td><?php echo esc($rc['age'])?></td>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</body>
</html>