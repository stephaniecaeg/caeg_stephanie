<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #a1f0d1 0%, #5eead4 50%, #34d399 100%);
      color: #1e293b;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      background: #f8fffb;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 350px;
      text-align: center;
    }

    .title {
      color: #047857;
      font-weight: 600;
      font-size: 1.25rem;
      margin-bottom: 1.5rem;
    }

    .form-input {
      background: #f1f5f9;
      border: 1px solid #d1d5db;
      border-radius: 0.5rem;
      padding: 0.75rem;
      width: 100%;
      transition: 0.2s;
      font-size: 0.9rem;
    }

    .form-input:focus {
      outline: none;
      border-color: #34d399;
      box-shadow: 0 0 0 2px rgba(52,211,153,0.3);
    }

    .login-btn {
      background: #10b981;
      color: #fff;
      padding: 0.75rem;
      border-radius: 0.5rem;
      font-weight: 600;
      width: 100%;
      transition: 0.2s;
    }

    .login-btn:hover {
      background: #059669;
      transform: scale(1.02);
      box-shadow: 0 4px 14px rgba(16,185,129,0.3);
    }

    .blue-link {
      color: #059669;
      font-weight: 500;
      transition: 0.2s;
    }

    .blue-link:hover {
      color: #34d399;
      text-decoration: underline;
    }

    button[type="button"] {
      color: #059669;
    }

    button[type="button"]:hover {
      color: #34d399;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h1 class="title">Login to Your Account</h1>

    <form method="post" class="space-y-4 text-left">
      <div>
        <label class="block text-sm font-semibold text-gray-600 mb-1">Username</label>
        <input type="text" name="username" placeholder="Enter username" required class="form-input">
      </div>

      <div>
        <label class="block text-sm font-semibold text-gray-600 mb-1">Password</label>
        <div class="relative">
          <input type="password" id="login-password" name="password" placeholder="Enter password" required class="form-input pr-16">
          <button type="button" onclick="togglePassword('login-password', this)" 
            class="absolute inset-y-0 right-3 text-sm font-semibold">Show</button>
        </div>
      </div>

      <button type="submit" class="login-btn">Login</button>
    </form>

    <p class="text-center text-gray-500 mt-4 text-sm">
      Don’t have an account?  
      <a href="<?= site_url('/') ?>" class="blue-link">Register</a>
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
