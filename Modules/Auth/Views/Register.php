<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-white shadow-md p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-xl font-bold text-blue-600"><?= getenv('APP_NAME') ?></a>
        <div class="hidden md:flex space-x-6">
            <a href="/" class="text-gray-600 hover:text-blue-600">Home</a>
        </div>
        <button class="md:hidden text-gray-600" id="menu-btn">☰</button>
    </div>
    <div class="hidden md:hidden flex-col space-y-4 p-4" id="mobile-menu">
        <a href="/" class="text-gray-600 hover:text-blue-600">Home</a>
    </div>
</nav>

<!-- Login Form -->
<div class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-gray-700">Login</h2>

        <?php if (!empty($_SESSION['slimFlash'])): ?>
            <?php foreach ($_SESSION['slimFlash'] as $key => $messages): ?>
                <?php foreach ($messages as $message): ?>
                    <p class="text-<?php echo $key === 'success' ? 'green' : 'red'; ?>-500">
                        <?php echo htmlspecialchars((string)$message); ?>
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
</div>

</body>
</html>
