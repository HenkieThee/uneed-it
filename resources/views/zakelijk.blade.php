@php 
    $user = session('user', null);

    if ($user === null) {
        redirect('login_or_signup');
    }
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Over Ons</title>
    @vite(['resources/css/zakelijkstyle.css', 'resources/js/zakelijkscript.js'])

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
<main id="mainZakelijk">
    <div class="block-text">
        <h1>Welkom!</h1>
        <p>We zijn blij om u te kunnen helpen. Hoe kunnen wij assisteren?</p>
        <div class="buttons">
            <a href=" {{ url('bestellen') }} "><button>Ontvang hulp</button></a>
            <button id="verzoekenBtn" style="display: none;" onclick="viewRequests()">Verzoeken bekijken</button>
        </div>
    </div>
</main>
<script>
    window.onload = function() {
        @if($user['role'] === 'admin')
            document.getElementById("verzoekenBtn").style.display = "block";
            document.getElementById("verzoekenBtn").addEventListener("click", function() {
                window.location.href = " {{ url('verzoeken') }}";
            });
        @endif
    };
</script>
</body>
</html>
