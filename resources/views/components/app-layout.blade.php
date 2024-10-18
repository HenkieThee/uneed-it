<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    @vite(['resources/css/style1.css'])
    <script src="https://cdn.tailwindcss.com"></script>
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

        <main id="mainContent">
            {{ $slot }}
        </main>

    </body>
</html>