<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - CELZ5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900 font-sans">
    <!-- Navbar -->
    <nav class="bg-gray-900 shadow-md ">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="/" class="flex items-center">
                <img src="/images/logo.png" alt="logo" class="w-24">
            </a>
        </div>
    </nav>

    <!-- Login Section -->
    <section class="flex items-center justify-center py-10 px-4 content-center mt-10">
        <div
            class="relative bg-gray-900/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transform transition-all duration-300 p-6 border border-gray-700 w-full max-w-md">

            <!-- Title -->
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-blue-800">Welcome Back</h2>
                <p class="text-gray-500 mt-1">Login to continue to your account</p>
            </div>

            <!-- Form -->
            <form action="/login" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300">Email Address</label>
                    <input id="email" type="email" name="email" placeholder="you@example.com"
                        class="mt-1 w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-800 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                    <x-form-error name="email" />
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold shadow transition duration-200">
                    Sign In
                </button>
            </form>

            <!-- Extra Links -->
            <div class="text-center mt-6">
                <p class="text-sm text-gray-400">
                    Don’t have an account?
                    <a href="/register" class="text-blue-500 hover:underline">Register here</a>
                </p>
            </div>
        </div>
    </section>

</body>


</html>
