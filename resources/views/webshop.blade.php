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
                <li><a href="{{ route('webshop.index', ['category' => 'laptop']) }}" class="hover:underline">Laptops</a></li>
                <li><a href="{{ route('webshop.index', ['category' => 'pc']) }}" class="hover:underline">PC's</a></li>
                <li><a href="{{ route('webshop.index', ['category' => 'onderdeel']) }}" class="hover:underline">Onderdelen</a></li>
            </ul>
        </nav>
        <div class="relative">
            <i class="fas fa-shopping-cart text-2xl cursor-pointer" id="cart-icon"></i>
            <span id="cart-count" class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 bg-red-600 text-white rounded-full text-xs w-5 h-5 flex items-center justify-center">0</span>
        </div>
    </div>
</header>

<div id="search-container" class="container mx-auto py-4">
    <input type="text" id="search" placeholder="Zoek op merk of naam..." class="border p-2 w-full">
</div>

<main class="container mx-auto py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Prudcten -->
        @foreach ($products as $product)
        <div class="bg-white p-4 rounded-lg shadow-md product-box" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-price="{{ $product->price }}">
            <img src="{{ asset('images/pc.jpg') }}" alt="Product Image" class="w-full h-48 object-cover mb-4 rounded">
            <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
            <p class="text-gray-700 mb-4">€{{ $product->price }}</p>
            <button class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 add-to-cart">Add to Cart</button>
            <button class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 remove-from-cart hidden">Remove</button>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8 flex justify-center">
        {{ $products->appends(request()->input())->links() }}
    </div>
</main>

<!-- Shopping Cart -->
<div id="cart-modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/2">
        <h2 class="text-2xl font-bold mb-4">Shopping Cart</h2>
        <div id="cart-items" class="mb-4">
            
        </div>
        <div class="flex justify-between items-center mb-4">
            <span class="text-xl font-semibold">Totaal:</span>
            <span id="cart-total" class="text-xl font-semibold">€0.00</span>
        </div>
        <div class="mb-4">
            <label for="payment-method" class="block text-sm font-medium text-gray-700">Selecteer betaal methode</label>
            <select id="payment-method" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="credit-card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank-transfer">Ideal</option>
            </select>
        </div>
        <div class="flex justify-end">
            <button id="close-cart" class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 mr-2">Aflsuiten</button>
            <button class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700">Doorgaan naar betalen</button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        let cart = [];

        function updateCartCount() {
            $('#cart-count').text(cart.length);
        }

        function updateCartTotal() {
            let total = 0;
            cart.forEach(item => {
                total += item.price;
            });
            $('#cart-total').text('€' + total.toFixed(2));
        }

        function renderCartItems() {
            $('#cart-items').empty();
            cart.forEach(item => {
                $('#cart-items').append(`
                    <div class="flex justify-between items-center mb-2">
                        <span>${item.name}</span>
                        <span>€${item.price.toFixed(2)}</span>
                    </div>
                `);
            });
        }

        $('.add-to-cart').on('click', function() {
            const productBox = $(this).closest('.product-box');
            const productId = productBox.data('id');
            const productName = productBox.data('name');
            const productPrice = parseFloat(productBox.data('price'));

            if (!cart.some(item => item.id === productId)) {
                cart.push({ id: productId, name: productName, price: productPrice });
                productBox.find('.add-to-cart').addClass('hidden');
                productBox.find('.remove-from-cart').removeClass('hidden');
                updateCartCount();
                updateCartTotal();
            }
        });

        $('.remove-from-cart').on('click', function() {
            const productBox = $(this).closest('.product-box');
            const productId = productBox.data('id');

            cart = cart.filter(item => item.id !== productId);
            productBox.find('.remove-from-cart').addClass('hidden');
            productBox.find('.add-to-cart').removeClass('hidden');
            updateCartCount();
            updateCartTotal();
        });

        $('#cart-icon').on('click', function() {
            renderCartItems();
            updateCartTotal();
            $('#cart-modal').removeClass('hidden');
        });

        $('#close-cart').on('click', function() {
            $('#cart-modal').addClass('hidden');
        });

        $('#search').on('keyup', function() {
            var search = $(this).val().toLowerCase();
            $('.product-box').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(search) > -1);
            });
        });
    });
</script>

</x-app-layout>