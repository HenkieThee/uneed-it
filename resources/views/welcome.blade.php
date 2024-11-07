<x-app-layout>
    <main style="background-image: url('{{ asset("images/40gp-uneedit5.jpg") }}');" id="mainhome">
        <div id="hometext">
            <img src="{{ asset('images/cropped-logo UNEED-IT(notext).png') }}">
            <p><span class="white-text">voor al uw reparaties kunt u terecht bij </span><span class="red-text">Uneed-</span><span class="blue-text">it</span></p>
        </div>
    </main>
</x-app-layout>

<footer id="footer" class="bg-gray-800 text-white py-8">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        <div id="adress" class="flex items-center space-x-4">
            <img src="{{ asset('images/location.png') }}" class="w-8 h-8">
            <div>
                <p>ZUIDBAAN 514, 2841MD</p>
                <p>MOORDRECHT</p>
            </div>
        </div>
        <div id="telefoonnnumer" class="flex items-center space-x-4">
            <img src="{{ asset('images/phone.png') }}" class="w-8 h-8">
            <div>
                <p>+316 30 985 409 SERVICENUMMER</p>
                <p>+3118 28 202 18 KANTOOR</p>
                <p>BEREIKBAAR VAN 09:00-18:00</p>
            </div>
        </div>
        <div id="tijd" class="flex items-center space-x-4">
            <img src="{{ asset('images/clock.png') }}" class="w-8 h-8">
            <div>
                <p>MA T/M VRIJ, 09:00 - 23:00</p>
                <p>TELEFONISCH BEREIKBAAR</p>
                <p>VOOR ABONNEMENTHOUDERS</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>