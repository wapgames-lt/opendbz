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
        <form class="mt-4">
            <div>
                <label class="block text-gray-600">Email</label>
                <input type="email" class="w-full p-2 border rounded-lg mt-1 focus:ring focus:ring-blue-300" required>
            </div>
            <div class="mt-4">
                <label class="block text-gray-600">Password</label>
                <input type="password" class="w-full p-2 border rounded-lg mt-1 focus:ring focus:ring-blue-300"
                       required>
            </div>
            <button class="w-full bg-blue-600 text-white mt-4 py-2 rounded-lg hover:bg-blue-700">Login</button>
        </form>
        <p class="text-center text-gray-600 mt-4"><a href="/register" class="text-blue-600">Registracija</a></p>
    </div>
</div>

<script>
    document.getElementById("menu-btn").addEventListener("click", function () {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });
</script>
</body>
</html>
