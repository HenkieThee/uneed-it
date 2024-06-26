<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bezorgdiensten</title>
    @vite(['resources/css/bezorg.css'])
</head>
<body>
<nav id="navbar">
    <div id="logonav">
        <img src="{{ asset('images/cropped-logo UNEED-IT.png') }}">
    </div>
    <div id="logoptions">
        <ul>
            <li class="redc"> <a href=" {{ url('/') }} ">Home</a> </li>
            <li class="bluec"> <a href=" {{ url('overons') }} ">Over ons </a></li>
            <li class="redc"> <a href=" {{ url('service') }} ">Service </a></li>
            <li class="bluec" > <a href=" {{ url('zakelijk') }} ">Zakelijk </a></li>
            <li class="redc"> <a href=" {{ url('faq') }} ">Faq </a> </li>
            <li class="bluec"><a href=" {{ url('bezorgdiensten') }} "> Bezorgdiensten </a></li>
            <li class="redc"> <a href=" {{ url('account') }} ">Account </a> </li>
        </ul>
    </div>
</nav>
<main>
</main>
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
<div class="container">
    <h1 class="textbezorg">Bezorgdiensten</h1>
    <p class="textbezorg"> Als gebruiker wil ik informatie zien over bezorgdiensten zoals UPS, DHL, Homerr, zodat ik kan kiezen voor ophalen en verzenden.</p>
    <p class="textbezorg">Kies een bezorgdienst:</p>
    <ul>
        <li><button class="bezorgdiensten" onclick="selectBezorgdienst('UPS')">UPS</button></li>
        <li><button class="bezorgdiensten" onclick="selectBezorgdienst('DHL')">DHL</button></li>
        <li><button class="bezorgdiensten" onclick="selectBezorgdienst('Homerr')">Homerr</button></li>
        <!-- Voeg hier andere bezorgdiensten toe -->
    </ul>
    <div id="result"></div>
</div>
<script>
    function selectBezorgdienst(bezorgdienst) {
        document.getElementById('result').innerText = `Je hebt ${bezorgdienst} gekozen.`;
        // Hier kun je verdere acties toevoegen afhankelijk van de geselecteerde bezorgdienst
    }
</script>
</body>
</html>
 