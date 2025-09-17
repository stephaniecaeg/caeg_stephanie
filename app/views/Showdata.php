<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showdata</title>
    
    <style>
        /* showdata.css */

body {
    font-family: Arial, sans-serif;
    background: #ffe6e1; /* soft peach-pink */
    margin: 0;
    padding: 20px;
    text-align: center;
}

h1 {
    color: #cc3366; /* pig pink */
    margin-bottom: 20px;
    font-size: 2rem;
}

table {
    width: 80%;
    margin: 0 auto 20px auto; /* center table and add space below */
    border-collapse: collapse;
    background: #fff5f2; /* light peach background for table */
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

th, td {
    padding: 12px 15px;
    text-align: center;
    border: 1px solid #f5b6b0;
}

th {
    background-color: #ff99aa; /* header pig pink */
    color: white;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #fff0ec; /* alternate row */
}

tr:hover {
    background-color: #ffe0e6; /* hover effect */
}

a {
    text-decoration: none;
    padding: 6px 12px;
    margin: 0 4px;
    border-radius: 6px;
    font-size: 0.9rem;
    font-weight: bold;
    transition: background 0.3s;
}

a[href*="update"] {
    background-color: #ffb347; /* peach-orange for update */
    color: white;
}

a[href*="update"]:hover {
    background-color: #e69530;
}

a[href*="delete"] {
    background-color: #ff6b81; /* reddish-pink for delete */
    color: white;
}

a[href*="delete"]:hover {
    background-color: #cc4c5d;
}

a[href*="create"] {
    display: inline-block;
    background-color: #cc3366; /* dark pig pink */
    color: white;
    padding: 10px 18px;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: bold;
    margin-top: 10px;
    transition: background 0.3s;
}

a[href*="create"]:hover {
    background-color: #a82b54;
}

        /* 🔍 Search form */
form {
    margin-bottom: 20px;
}

form input[type="text"] {
    padding: 8px 12px;
    border: 1px solid #f5b6b0;
    border-radius: 6px;
    font-size: 0.9rem;
    width: 220px;
    background-color: #fff5f2;
}

form button {
    padding: 8px 14px;
    border: none;
    border-radius: 6px;
    background-color: #cc3366; /* pig pink */
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
}

form button:hover {
    background-color: #a82b54;
}

form a {
    background-color: #ff6b81; /* reddish pink clear btn */
    color: white;
    padding: 7px 12px;
    border-radius: 6px;
    font-size: 0.85rem;
    margin-left: 6px;
}

form a:hover {
    background-color: #cc4c5d;
}

/* Remove bullets sa pagination */
.pagination,
.pagination ul,
.pagination li {
    list-style: none;
    margin: 0;
    padding: 0;
}

.pagination {
    margin-top: 20px;
    display: flex;
    justify-content: center; /* gitna */
    gap: 8px; /* space bawat button */
    flex-wrap: wrap;
}

.pagination li {
    display: inline-block;
}

.pagination a,
.pagination strong {
    display: inline-block;
    background-color: #ff99aa; /* pig pink */
    color: white;
    padding: 8px 14px;
    border-radius: 6px;
    font-size: 0.9rem;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s;
}

.pagination a:hover {
    background-color: #cc3366;
}

.pagination strong {
    background-color: #cc3366; /* active page */
}

    </style>
</head>
<body>
    <h1>Welcome to Table View</h1>

    <!-- ✅ Search form -->
    <form method="get" action="<?= site_url('user/show'); ?>">
        <input type="text" name="q"
               value="<?= isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '' ?>"
               placeholder="Search student...">
        <button type="submit">Search</button>
        <?php if (!empty($_GET['q'])): ?>
            <a href="<?= site_url('user/show'); ?>">Clear</a>
        <?php endif; ?>
    </form>

    <br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        <?php if (!empty($students)): ?>
            <?php foreach(html_escape($students) as $student): ?>
            <tr>
                <td><?= $student['ID']; ?></td>
                <td><?= $student['lastname']; ?></td>
                <td><?= $student['firstname']; ?></td>
                <td><?= $student['email']; ?></td>
                <td><?= $student['role']; ?></td>
                <td>
                    <a href="<?= site_url('user/update/'.$student['ID']); ?>">Update</a>
                    <a href="<?= site_url('user/soft-delete/'.$student['ID']); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" style="text-align:center;">No records found.</td>
            </tr>
        <?php endif; ?>
    </table>

    <!-- ✅ Pagination links -->
    <?php if (!empty($page)): ?>
        <div class="pagination">
            <?= $page; ?>
        </div>
    <?php endif; ?>

    <br>
    <a href="<?=site_url('/');?>">Create Record</a>
</body>
</html>
