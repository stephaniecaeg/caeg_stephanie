<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User - Company Portal</title>
  <style>
:root {
  --primary: #e06aa5; /* Pink tone */
  --primary-dark: #b84c85;
  --bg-gradient: linear-gradient(135deg, #f9c5d1 0%, #f7a1c4 50%, #fcd8e5 100%);
  --card-bg: #ffffff;
  --text: #1a1a1a;
  --muted: #6c757d;
  --radius: 10px;
}

body {
  font-family: "Segoe UI", Roboto, Arial, sans-serif;
  background: var(--bg-gradient);
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  color: var(--text);
}

.container {
  background: var(--card-bg);
  padding: 40px 30px;
  border-radius: var(--radius);
  box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
  text-align: center;
  transition: transform 0.2s ease-in-out;
}

.container:hover {
  transform: translateY(-4px);
}

.logo {
  width: 70px;
  height: 70px;
  margin-bottom: 12px;
}

h1 {
  font-size: 1.6rem;
  font-weight: 700;
  color: var(--primary-dark);
  margin-bottom: 25px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
}

label {
  display: block;
  text-align: left;
  margin-bottom: 6px;
  font-size: 0.8rem;
  font-weight: 600;
  color: var(--muted);
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

input[type="text"],
input[type="email"] {
  width: 100%;
  padding: 12px 10px;
  margin-bottom: 15px;
  border: 1px solid #ced4da;
  border-radius: var(--radius);
  font-size: 0.95rem;
  background: #fff;
  color: var(--text);
  transition: border-color 0.2s, box-shadow 0.2s;
}

input:focus {
  border-color: var(--primary);
  box-shadow: 0 0 0 3px rgba(224, 106, 165, 0.3);
  outline: none;
}

input[type="submit"] {
  width: 100%;
  padding: 14px;
  background: var(--primary);
  border: none;
  border-radius: var(--radius);
  color: #fff;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.2s, transform 0.1s;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

input[type="submit"]:hover {
  background: var(--primary-dark);
  transform: translateY(-2px);
}

.back-btn {
  display: inline-block;
  margin-top: 20px;
  background: transparent;
  color: var(--primary-dark);
  text-decoration: none;
  font-weight: 600;
  font-size: 0.9rem;
  transition: color 0.3s ease;
}

.back-btn:hover {
  color: var(--primary);
}
  </style>
</head>
<body>
  <form class="container" action="<?=site_url('students/update/'.$student['id']);?>" method="post">
    <img src="https://cdn-icons-png.flaticon.com/512/2942/2942077.png" alt="Building Logo" class="logo">
    <h1>Update User</h1>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="<?=html_escape($student['last_name']);?>" required>

    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="<?=html_escape($student['first_name']);?>" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?=html_escape($student['email']);?>" required>

    <label for="role">Role:</label>
    <input type="text" id="role" name="role" value="<?=html_escape($student['Role']);?>" required>

    <input type="submit" value="Update">
    <a href="<?=site_url('students');?>" class="back-btn">← Back to Records</a>
  </form>
</body>
</html>
