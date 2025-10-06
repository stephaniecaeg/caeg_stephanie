<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <style>
:root {
  --primary: #3cb371;        /* MediumSeaGreen */
  --primary-dark: #2e8b57;   /* Darker green */
  --accent: #c1f0c1;         /* Light pastel accent */
  --bg-gradient: linear-gradient(135deg, #eaffea, #d7fcd4, #c1f0c1);
  --card-bg: #ffffff;
  --text: #2f3e2f;           /* Dark grayish green text */
  --muted: #7a9b7a;
  --radius: 12px;
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
  border-radius: var(--radius);
  box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
  padding: 40px 30px;
  text-align: center;
  transition: transform 0.2s ease-in-out;
}

.container:hover {
  transform: translateY(-4px);
}

.logo {
  width: 75px;
  height: 75px;
  margin-bottom: 15px;
  border-radius: 50%;
  background: #fff;
  padding: 8px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

h1 {
  font-size: 1.6rem;
  font-weight: 700;
  color: var(--primary);
  margin-bottom: 25px;
  letter-spacing: 0.5px;
}

input[type="text"],
input[type="email"],
select {
  width: 100%;
  padding: 12px 10px;
  margin-bottom: 15px;
  border: 1px solid #b6d8b6;
  border-radius: var(--radius);
  font-size: 0.95rem;
  background: #fff;
  color: var(--text);
  transition: border-color 0.2s, box-shadow 0.2s;
}

input:focus, select:focus {
  border-color: var(--primary);
  box-shadow: 0 0 0 3px rgba(60, 179, 113, 0.25);
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

.footer {
  margin-top: 25px;
  font-size: 0.85rem;
  color: var(--muted);
}
  </style>
</head>
<body>
  <form class="container" action="<?=site_url('students/create');?>" method="post">
    <!-- 🌿 New green-themed company logo -->
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Company Logo" class="logo">

    <h1>Create User</h1>

    <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
    <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
    <input type="email" id="email" name="email" placeholder="Email" required>

    <select id="role" name="role" required>
      <option value="" disabled selected>Select Role</option>
      <option value="Manager">Manager</option>
      <option value="Staff">Staff</option>
    </select>

    <input type="submit" value="Submit">

    <div class="footer">
      🌿 &copy; 2025 Your Company Name. All Rights Reserved.
    </div>
  </form>
</body>
</html>
