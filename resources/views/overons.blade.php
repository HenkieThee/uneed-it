<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Over Ons</title>
    @vite(['resources/css/overonsstyle.css'])

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
<main style="background-image: url('{{ asset("images/uneedi01.jpg") }}');" id="mainOverOns">
    <div class="red-text" >
        <p > Over Ons</p>
    </div>
    <div class="ootext">
        <p class="white-text">
            Welkom bij Uneed-it, uw vertrouwde partner voor al uw reparatiebehoeften. Bij Uneed-it streven we ernaar hoogwaardige kwalitatieve reparatiediensten te bieden met een onwrikbare focus op klanttevredenheid en excellentie in kwaliteit.
        </p>
        <p class="white-text">
            Met een schat aan ervaring in de sector hebben we een onberispelijke reputatie opgebouwd als een bedrijf dat synoniem staat voor vakmanschap, snelle service en eerlijke prijzen. Of het nu gaat om het herstellen van elektronica, huishoudelijke apparaten, auto's of andere technische apparaten, ons team van deskundige technici staat paraat om uw problemen op te lossen en uw apparaten weer in optimale staat te herstellen.
        </p>
        <p class="white-text">
            Bij Uneed-it streven we naar een naadloze ervaring, vanaf het moment dat u contact met ons opneemt tot het moment dat u tevreden bent met de uitgevoerde reparatie. We begrijpen hoe essentieel uw apparaten zijn voor uw dagelijks leven, en daarom doen we er alles aan om ze snel en efficiënt te repareren, zodat u snel weer verder kunt.
        </p>
        <p class="white-text">
            Kies Uneed-it voor een professionele reparatieservice waarop u kunt vertrouwen. We staan klaar om u te helpen met al uw reparatiebehoeften.
        </p>
    </div>
</main>
</body>
</html>