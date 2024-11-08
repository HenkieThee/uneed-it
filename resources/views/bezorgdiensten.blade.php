<x-app-layout>
    @vite(['resources/css/bezorg.css'])

    <div class="Bezorg">
        <div class="container">
            <h1 class="txt main">Bezorgdiensten</h1>
            <p class="txt side">Kies een bezorgdienst:</p>
            <ul class="Diensten">
                <li><button class="bezorgdiensten text-white py-2 px-4 rounded" onclick="selectBezorgdienst('UPS')">UPS</button></li>
                <li><button class="bezorgdiensten text-white py-2 px-4 rounded" onclick="selectBezorgdienst('DHL')">DHL</button></li>
                <li><button class="bezorgdiensten text-white py-2 px-4 rounded" onclick="selectBezorgdienst('Homerr')">Homerr</button></li>
            </ul>
            <div id="result"></div>
            <div class="Moment">
                <h2 class="txt side">Bezorgmomenten:</h2>
                <p class="txt side">Maandag tot en met vrijdag: 10:00 tot 17:30</p>
                <p class="txt side">Zaterdag en zondag: Geen bezorging</p>
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
