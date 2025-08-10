<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register - CELZ5</title>
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

    <!-- Register Section -->
    <section class="flex items-center justify-center min-h-screen px-4">
        <div
            class="relative bg-gray-900/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transform transition-all duration-300 p-6 border border-gray-700 w-full max-w-md">

            <!-- Title -->
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-blue-800">Create an Account</h2>
                <p class="text-gray-400 mt-1">Join CELZ5 and start your journey with us</p>
            </div>

            <!-- Form -->
            <form action="/register" method="POST" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                    <input type="email" name="email" placeholder="Enter your email"
                        class="w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-800 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                    <x-form-error name="email" />
                </div>

                <!-- Extra Custom Fields -->
                <x-home-form />

                <!-- Church -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1">Church</label>
                    <input type="text" name="church" placeholder="Enter your church or fellowship"
                        class="w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-800 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                    <x-form-error name="church" />
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                    <input type="password" name="password" placeholder="Enter your password"
                        class="w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-800 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                    <x-form-error name="password" />
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold shadow transition">
                    Create Account
                </button>
            </form>

            <!-- Already have an account -->
            <div class="text-center mt-6">
                <p class="text-sm text-gray-400">
                    Already have an account?
                    <a href="/login" class="text-blue-500 hover:underline">Login here</a>
                </p>
            </div>
        </div>
    </section>

</body>


</html>
