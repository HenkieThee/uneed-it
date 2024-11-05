<x-app-layout>
    @vite(['resources/css/bezorg.css'])

    <footer id="footer">
        <div id="adress">
            <p>ZUIDBAAN 514, 2841MD</p>
            <p> MOORDRECHT</p>
        </div>
        <div id="telefoonnnumer">
            <p>+316 30 985 409 SERVICENUMMER</p>
            <p>+3118 28 202 18 KANTOOR </p>
            <p> BEREIKBAAR VAN 09:00-18:00</p>
        </div>
        <div id="tijd">
            <p>MA T/M VRIJ, 09:00 - 23:00</p>
            <p>TELEFONISCH BEREIKBAAR</p>
            <p>VOOR ABONNEMENTHOUDERS</p>
        </div>
    </footer>

       <div class="pt-80">
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold mb-4">Bezorgdiensten</h1>
            <p class="text-lg mb-4">Kies een bezorgdienst:</p>
            <ul class="space-y-2">
                <li><button class="bezorgdiensten bg-blue-500 text-white py-2 px-4 rounded" onclick="selectBezorgdienst('UPS')">UPS</button></li>
                <li><button class="bezorgdiensten bg-blue-500 text-white py-2 px-4 rounded" onclick="selectBezorgdienst('DHL')">DHL</button></li>
                <li><button class="bezorgdiensten bg-blue-500 text-white py-2 px-4 rounded" onclick="selectBezorgdienst('Homerr')">Homerr</button></li>
            </ul>
            <div id="result" class="mt-4"></div>
            <div class="mt-8">
                <h2 class="text-2xl font-semibold mb-2">Bezorgmomenten</h2>
                <p class="text-lg">Maandag tot en met vrijdag: 10:00 tot 17:30</p>
                <p class="text-lg">Zaterdag en zondag: Geen bezorging</p>
            </div>
        </div>
    </div>
    <script>
        function selectBezorgdienst(bezorgdienst) {
            document.getElementById('result').innerText = `Je hebt ${bezorgdienst} gekozen.`;
            // Hier kun je verdere acties toevoegen afhankelijk van de geselecteerde bezorgdienst
        }
    </script>
</x-app-layout>