<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login or Sign Up</title>
    @vite(['resources/css/registrationstyle.css'])
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
    <div class="container">
    <div class="login-signup">
        <h1>Het lijkt erop dat jij niet ingelogd is</h1>
        <button onclick="window.location.href=' {{ url('login') }} '">Log In</button>
        <button onclick="window.location.href=' {{ url('registration') }} '">Sign Up</button>
    </div>
</div>
</body>
</html>
