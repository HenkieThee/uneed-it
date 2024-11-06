<x-app-layout>
    
<style>
    body {
        overflow: auto !important;
    }
</style>

<header class="text-black p-4 pt-28">
    <div class="container mx-auto flex justify-between items-center">
        <!-- <h1 class="text-3xl font-bold">Webshop</h1> -->
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:underline">Laptops</a></li>
                <li><a href="#" class="hover:underline">PC's</a></li>
                <li><a href="#" class="hover:underline">Onderdelen</a></li>
            </ul>
        </nav>
        <div class="relative">
            <i class="fas fa-shopping-cart text-2xl"></i>
            <span class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 bg-red-600 text-white rounded-full text-xs w-5 h-5 flex items-center justify-center">3</span>
        </div>
    </div>
</header>

<main class="container mx-auto py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Todo maak dit werkend met database -->
        @for ($i = 0; $i < 25; $i++)
        <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="{{ asset('images/pc.jpg') }}" alt="Product Image" class="w-full h-48 object-cover mb-4 rounded">
            <h2 class="text-xl font-semibold mb-2">Product Name</h2>
            <p class="text-gray-700 mb-4">€99.99</p>
            <button class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Add to Cart</button>
        </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="mt-8 flex justify-center">
        <nav class="flex space-x-2">
            <a href="#" class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">1</a>
            <a href="#" class="px-3 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">2</a>
            <a href="#" class="px-3 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">3</a>

        </nav>
    </div>
</main>

<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 Webshop. All rights reserved.</p>
    </div>
</footer>

</x-app-layout>