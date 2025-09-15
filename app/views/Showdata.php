<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showdata</title>
    <link rel="stylesheet" href="<?=base_url();?>public/css/showdata.css">
</head>
<body>
    <h1>Welcome to Table View</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        <?php foreach(html_escape($students) as $student): ?>
        <tr>
            <td><?=$student['ID'];?></td>
            <td><?=$student['lastname'];?></td>
            <td><?=$student['firstname'];?></td>
            <td><?=$student['email'];?></td>
            <td><?=$student['role'];?></td>
            <td>
                <a href="<?=site_url('user/update/'.$student['ID']);?>">Update</a>
                <a href="<?=site_url('user/soft-delete/'.$student['ID']);?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?=site_url('/');?>">Create Record</a>
</body>
</html>