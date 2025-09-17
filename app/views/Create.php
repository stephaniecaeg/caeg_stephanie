<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
     <link rel="stylesheet" href="<?=base_url();?>public/css/style3.css">
</head>
<body>
    <h1>Welcome to Create View</h1>
    <form action="<?=site_url('user/create');?>" method="post">
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name"><br>
        
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        
        <label for="role">Role:</label><br>
        <input type="text" id="role" name="role"><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>