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
        <tr><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showdata</title>
    <link rel="stylesheet" href="<?=base_url();?>public/css/showdata.css">
</head>
<body>
    <div class="container">
        <h1>Students Table</h1>

        <!-- 🔹 Actions (Search + Buttons) -->
        <div class="actions">
            <form method="get" action="<?= site_url('user/showdata'); ?>" class="search-form">
                <input type="text" name="q"
                       value="<?= isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '' ?>"
                       placeholder="Search students...">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>

            <?php if (!empty($_GET['q'])): ?>
                <a href="<?= site_url('user/showdata'); ?>" class="btn btn-secondary">Back</a>
            <?php else: ?>
                <a href="<?= site_url('/'); ?>" class="btn btn-primary">Create Record</a>
            <?php endif; ?>
        </div>

        <!-- 🔹 Table -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($students)): ?>
                        <?php foreach ($students as $student): ?>
                            <tr>
                                <td><?= htmlspecialchars($student['ID']); ?></td>
                                <td><?= htmlspecialchars($student['lastname']); ?></td>
                                <td><?= htmlspecialchars($student['firstname']); ?></td>
                                <td><?= htmlspecialchars($student['email']); ?></td>
                                <td><?= htmlspecialchars($student['role']); ?></td>
                                <td>
                                    <a href="<?= site_url('user/update/' . $student['ID']); ?>">Update</a>
                                    <span style="color: rgba(224, 224, 224, 0.3); margin: 0 0.5rem;">|</span>
                                    <a href="<?= site_url('user/soft-delete/' . $student['ID']); ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="no-data">No students found 📚</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- 🔹 Pagination -->
        <?php if (!empty($page)): ?>
            <div class="pagination">
                <?= $page; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>

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