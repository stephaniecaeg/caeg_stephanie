<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-pink-100 via-white to-pink-50 px-4">

  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-lg border border-pink-200">
    
    <!-- Header -->
    <h1 class="text-2xl font-bold text-center text-pink-600 mb-6">Create New User</h1>

    <!-- Form -->
    <form action="<?=site_url('user/create');?>" method="post" class="space-y-5">

      <!-- Last Name -->
      <div>
        <label for="last_name" class="block text-sm font-semibold text-gray-700">Last Name:</label>
        <input type="text" id="last_name" name="last_name"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-pink-400 focus:outline-none">
      </div>

      <!-- First Name -->
      <div>
        <label for="first_name" class="block text-sm font-semibold text-gray-700">First Name:</label>
        <input type="text" id="first_name" name="first_name"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-pink-400 focus:outline-none">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-semibold text-gray-700">Email:</label>
        <input type="email" id="email" name="email"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-pink-400 focus:outline-none">
      </div>

      <!-- Role -->
      <div>
        <label for="role" class="block text-sm font-semibold text-gray-700">Role:</label>
        <input type="text" id="role" name="role"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-pink-400 focus:outline-none">
      </div>

      <!-- Submit -->
      <div class="text-center">
        <button type="submit"
                class="bg-pink-500 hover:bg-pink-600 text-white font-bold px-6 py-2 rounded-full shadow-md transition duration-200">
           Create User
        </button>
      </div>
    </form>
  </div>

</body>
</html>
