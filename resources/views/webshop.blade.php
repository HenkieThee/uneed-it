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
        <!-- Display paginated products -->
        @foreach ($products as $product)
        <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="{{ asset('images/pc.jpg') }}" alt="Product Image" class="w-full h-48 object-cover mb-4 rounded">
            <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
            <p class="text-gray-700 mb-4">€{{ $product->price }}</p>
            <button class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Add to Cart</button>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8 flex justify-center">
        {{ $products->links() }}
    </div>
</main>

</x-app-layout>