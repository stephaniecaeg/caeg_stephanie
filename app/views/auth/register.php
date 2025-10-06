<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
  body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #7fffd4, #00c896, #00a676);
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
  }

  .card {
    background: #f0fdf4;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    width: 100%;
    max-width: 360px;
    text-align: center;
  }

  .title {
    color: #047857;
    font-weight: 700;
    margin-bottom: 1.5rem;
  }

  .form-label {
    text-align: left;
    font-size: 0.9rem;
    font-weight: 500;
    color: #065f46;
    display: block;
    margin-bottom: 0.3rem;
  }

  .form-input {
    width: 100%;
    padding: 0.7rem;
    border: 1px solid #a7f3d0;
    border-radius: 0.5rem;
    background: #ecfdf5;
    color: #065f46;
    font-size: 0.95rem;
    margin-bottom: 1rem;
    transition: 0.2s;
  }

  .form-input:focus {
    border-color: #10b981;
    box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
    outline: none;
  }

  .btn-login {
    background: #059669;
    color: #fff;
    padding: 0.75rem;
    border: none;
    border-radius: 0.5rem;
    font-weight: 600;
    width: 100%;
    cursor: pointer;
    transition: 0.2s;
  }

  .btn-login:hover {
    background: #047857;
    box-shadow: 0 4px 10px rgba(5, 150, 105, 0.3);
  }

  .register-link {
    color: #047857;
    font-weight: 500;
    text-decoration: none;
    transition: 0.2s;
  }

  .register-link:hover {
    text-decoration: underline;
    color: #065f46;
  }
</style>
</head>
<body>

  <div class="card">
    <h1 class="title text-xl">Create Account</h1>

    <form method="post" class="space-y-4 text-left">
      <!-- Username -->
      <div>
        <label class="block text-sm font-semibold text-gray-400 mb-1">Username</label>
        <input type="text" name="username" placeholder="Enter username" required class="form-input">
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm font-semibold text-gray-400 mb-1">Password</label>
        <div class="relative">
          <input type="password" id="register-password" name="password" placeholder="Enter password" required class="form-input pr-16">
          <button type="button" onclick="togglePassword('register-password', this)" class="absolute inset-y-0 right-3 text-sm text-green-400 font-semibold">Show</button>
        </div>
      </div>

      <!-- Role -->
      <div>
        <label class="block text-sm font-semibold text-gray-400 mb-1">Role</label>
        <select name="role" class="form-input">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <!-- Register button -->
      <button type="submit" class="company-btn">Register</button>
    </form>

    <p class="text-center text-gray-400 mt-4 text-sm">
      Already have an account? 
      <a href="<?= site_url('auth/login') ?>" class="green-link">Login</a>
    </p>
  </div>

  <script>
  function togglePassword(id, btn) {
    const input = document.getElementById(id);
    if (input.type === "password") {
      input.type = "text";
      btn.textContent = "Hide";
    } else {
      input.type = "password";
      btn.textContent = "Show";
    }
  }
  </script>

</body>
</html>
