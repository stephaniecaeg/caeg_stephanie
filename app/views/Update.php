<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #a7f3d0 0%, #6ee7b7 30%, #34d399 70%, #059669 100%);
      color: #064e3b;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card {
      background: rgba(255, 255, 255, 0.9);
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      border: 1px solid rgba(34, 197, 94, 0.4);
      backdrop-filter: blur(8px);
      width: 100%;
      max-width: 420px;
    }

    .logo {
      width: 75px;
      height: 75px;
      margin: 0 auto 1rem;
      display: block;
      border-radius: 50%;
      background: #ecfdf5;
      padding: 6px;
      box-shadow: 0 2px 10px rgba(16, 185, 129, 0.3);
    }

    h1 {
      color: #059669;
      text-align: center;
      font-weight: 700;
      font-size: 1.6rem;
      margin-bottom: 1.5rem;
    }

    label {
      display: block;
      text-transform: uppercase;
      font-size: 0.8rem;
      font-weight: 600;
      color: #065f46;
      margin-bottom: 5px;
    }

    .form-input, select.form-input {
      background: #ecfdf5;
      border: 1px solid #a7f3d0;
      color: #065f46;
      border-radius: 0.5rem;
      padding: 0.75rem;
      width: 100%;
      transition: 0.2s;
    }

    .form-input:focus {
      outline: none;
      border-color: #10b981;
      box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.3);
    }

    select.form-input {
      appearance: none;
      background-image: url('data:image/svg+xml;utf8,<svg fill="%23065f46" height="18" viewBox="0 0 20 20" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 7l4.5 4.5L14.5 7z"/></svg>');
      background-repeat: no-repeat;
      background-position: right 0.75rem center;
      background-size: 0.9rem;
      cursor: pointer;
    }

    .company-btn {
      background: linear-gradient(90deg, #10b981, #059669);
      color: #fff;
      padding: 0.75rem;
      border-radius: 0.5rem;
      font-weight: 600;
      transition: all 0.2s ease-in-out;
      letter-spacing: 0.5px;
      width: 100%;
    }

    .company-btn:hover {
      background: linear-gradient(90deg, #059669, #047857);
      transform: scale(1.03);
      box-shadow: 0 4px 14px rgba(16, 185, 129, 0.4);
    }

    .back-btn {
      display: inline-block;
      margin-top: 20px;
      color: #059669;
      font-weight: 600;
      text-decoration: none;
      font-size: 0.9rem;
      transition: color 0.3s;
    }

    .back-btn:hover {
      color: #10b981;
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <form class="card" action="<?=site_url('students/update/'.$student['id']);?>" method="post">
    <!-- 🌿 Updated green logo -->
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Company Logo" class="logo">
    <h1>Update User</h1>

    <!-- Last Name -->
    <label for="last_name">Last Name</label>
    <input type="text" id="last_name" name="last_name" value="<?=html_escape($student['last_name']);?>" required class="form-input">

    <!-- First Name -->
    <label for="first_name">First Name</label>
    <input type="text" id="first_name" name="first_name" value="<?=html_escape($student['first_name']);?>" required class="form-input">

    <!-- Email -->
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?=html_escape($student['email']);?>" required class="form-input">

    <!-- Role Dropdown -->
    <label for="role">Role</label>
    <select id="role" name="role" required class="form-input">
      <option value="Staff" <?=($student['Role'] == 'Staff') ? 'selected' : ''?>>Staff</option>
      <option value="Full Stack Developer" <?=($student['Role'] == 'Full Stack Developer') ? 'selected' : ''?>>Full Stack Developer</option>
      <option value="Front-End Developer" <?=($student['Role'] == 'Front-End Developer') ? 'selected' : ''?>>Front-End Developer</option>
      <option value="Back-End Developer" <?=($student['Role'] == 'Back-End Developer') ? 'selected' : ''?>>Back-End Developer</option>
      <option value="Project Manager" <?=($student['Role'] == 'Project Manager') ? 'selected' : ''?>>Project Manager</option>
    </select>

    <button type="submit" class="company-btn mt-3">Update</button>

    <a href="<?=site_url('students');?>" class="back-btn">← Back to Records</a>
  </form>

</body>
</html>
