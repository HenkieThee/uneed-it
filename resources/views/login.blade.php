<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
<main class="main-content">
    <div class="form-container">
        <h2 class="form-title">Login</h2>
        <form id="registration-form" action=" {{ url('login') }} " method="post">
            @csrf
            <input type="text" class="" name="Naam" id="Naam" placeholder="Naam"><br>
            <input type="text" class="" name="email" id="email" placeholder="Email"><br>
            <input type="password" class="" name="password" id="password" placeholder="Password"><br>
            <button type="submit" >Log in</button>
        </form>
    </div>
</main>
</body>
</html>
