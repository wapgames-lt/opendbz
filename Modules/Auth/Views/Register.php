<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

<div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-md">
    <h2 class="text-2xl font-bold mb-4 text-center">Register</h2>

    <?php if (!empty($_SESSION['slimFlash'])): ?>
        <?php foreach ($_SESSION['slimFlash'] as $key => $messages): ?>
            <?php foreach ($messages as $message): ?>
                <p class="text-<?php echo $key === 'success' ? 'green' : 'red'; ?>-500">
                    <?php echo htmlspecialchars((string) $message); ?>
                </p>
            <?php endforeach; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <form action="/register" method="POST" class="space-y-4">
        <!-- Name Field -->
        <div>
            <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
            <input type="text" name="username" id="username" required
                   class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Email Field -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" name="email" id="email" required
                   class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Password Field -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
            <input type="password" name="password" id="password" required
                   class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">
                Register
            </button>
        </div>
    </form>
</div>

</body>
</html>
