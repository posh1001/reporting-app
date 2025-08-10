<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Report Submission</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    {{-- <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-blue-600">Media Report Portal</h1>
            <nav>
                <a href="#form" class="text-sm text-gray-600 hover:text-blue-600">Submit Report</a>
            </nav>
        </div>
    </header> --}}

    <!-- Hero Section -->
    <section class="text-center py-20 bg-gradient-to-r from-blue-50 to-blue-100">
        <!-- Form Header -->
             <div class="flex items-center gap-3 mb-4">
            <i data-feather="file-text" class="w-6 h-6 text-blue-600"></i>
            <div>
                <h2 class="text-xl font-semibold text-gray-800">Church Services Report Form</h2>
                <p class="text-sm text-gray-500">Fill the form below to submit your media report.</p>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section id="form" class="py-12 px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow p-8 space-y-6">

            <!-- Form Header -->
              <div class="flex items-center gap-3 mb-4">
            <i data-feather="file-text" class="w-6 h-6 text-blue-600"></i>
            <div>
                <h2 class="text-xl font-semibold text-gray-800">Church Services Report Form</h2>
                <p class="text-sm text-gray-500">Fill the form below to submit your media report.</p>
            </div>
        </div>

            <!-- Form Body -->
            <form action="/church" method="POST" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @csrf

                <!-- Church -->
                <div class="col-span-1">
                    <label class="block text-sm font-medium text-gray-700">Church</label>
                    <input type="text" name="church" placeholder="Enter your church"
                        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                </div>

                <!-- Products -->
                <div class="col-span-1">
                    <label class="block text-sm font-medium text-gray-700">Products</label>
                    <select name="product"
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                        required>
                        <option value="" disabled selected>Select Product</option>
                        <option value="Highlights">Highlights</option>
                        <option value="Sights and Sound">Sights and Sound</option>
                        <option value="Testimony Videos">Testimony Videos</option>
                        <option value="Top Inviters (Individuals)">Top Inviters (Individuals)</option>
                        <option value="Top Inviters (Cell)">Top Inviters (Cell)</option>
                        <option value="Top Inviters (Churches)">Top Inviters (Churches)</option>
                        <option value="Top Inviters (Groups)">Top Inviters (Groups)</option>
                        <option value="Sponsorship Videos">Sponsorship Videos</option>
                        <option value="Teaching Outlines">Teaching Outlines</option>
                    </select>
                </div>

                <!-- Total Produced -->
                <div class="col-span-1">
                    <label class="block text-sm font-medium text-gray-700">Total Produced</label>
                    <input type="number" name="produced" placeholder="0"
                        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Total Aired -->
                <div class="col-span-1">
                    <label class="block text-sm font-medium text-gray-700">Total Aired/Deployed in Church
                        Services</label>
                    <input type="number" name="aired" placeholder="0"
                        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Total Languages -->
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-gray-700">Total Languages (Language Churches)</label>
                    <input type="number" name="languages" placeholder="0"
                        class="mt-1 w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Submit Button -->
                <div class="col-span-2 pt-4">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                        Submit Report
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-6 text-sm text-gray-500 bg-white mt-10">
        &copy; {{ date('Y') }} Media Report System. All rights reserved.
    </footer>

    <script>
        feather.replace();
    </script>
</body>

</html>
