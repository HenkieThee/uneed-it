@php
    $user = session('user', null);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zakelijk</title>
    @vite(['resources/css/bestellenstyle.css'])
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
    <h1>Omschrijf zo duidelijk mogelijk het defect:</h1>
    <form action="{{ url('submit-defect') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="defect">Omschrijving:</label><br>
        <textarea id="defect" name="defect" rows="6" cols="50" required></textarea><br>

        <label for="machine">Type machine:</label><br>
        <select id="machine" name="machine" required>
            <option value="Niet gespecificeerd">Niet gespecificeerd</option>
            <option value="Apple">Apple</option>
            <option value="Computer">Computer</option>
            <option value="Tablet">Tablet</option>
            <option value="Laptop">Laptop</option>
            <option value="Smartphone">Smartphone</option>
            <option value="Tarieven computer">Tarieven computer</option>
            <option value="Tarieven Apple">Tarieven Apple</option>
        </select><br>

        <label for="garantie">Garantie:</label><br>
        <select id="garantie" name="garantie" required>
            <option value="ja">Ja</option>
            <option value="nee">Nee</option>

        </select><br>

        <label for="datum">Datum:</label><br>
        <input type="date" id="datum" name="datum" required><br>

        <label for="photo">Foto (optioneel):</label><br>
        <input type="file" id="photo" name="photo"><br>

        <input type="hidden" name="idvanklant" value=" {{ $user['id'] }} ">
        <input type="hidden" name="Naam" value=" {{ $user['email'] }} ">
        <input type="hidden" name="email" value=" {{ $user['email'] }} ">

        <input type="submit" value="Verzenden">

    </form>
</div>
</body>
</html>
