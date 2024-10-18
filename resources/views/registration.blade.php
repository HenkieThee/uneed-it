<x-app-layout>
    @vite(['resources/css/registrationstyle.css'])

    <main class="main-content">
        <div class="form-container">
            <h2 class="form-title">Registreer</h2>
            <form id="registration-form" action="{{ url('register') }}" method="post">
                @csrf
                <input type="text" name="naam" id="naam" placeholder="Naam" required class="input-field"><br>
                <input type="text" name="telefoonnummer" id="telefoonnummer" placeholder="Telefoonnummer" required class="input-field"><br>
                <input type="email" name="email" id="email" placeholder="Email" required class="input-field"><br>
                <input type="text" name="address" id="address" placeholder="Address" required class="input-field"><br>
                <input type="password" name="password" id="password" placeholder="Wachtwoord" required class="input-field"><br>
                <button type="submit" class="submit-button">Registreer</button>
            </form>
        </div>
    </main>
</x-app-layout>