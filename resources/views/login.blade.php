<x-app-layout>
    @vite(['resources/css/registrationstyle.css'])

    <main class="main-content">
        <div class="form-container">
            <h2 class="form-title">Login</h2>
            <form id="registration-form" action="{{ url('login') }}" method="post">
                @csrf
                <input type="text" name="Naam" id="Naam" placeholder="Naam" required class="input-field"><br>
                <input type="text" name="email" id="email" placeholder="Email" required class="input-field"><br>
                <input type="password" name="password" id="password" placeholder="Password" required class="input-field"><br>
                <button type="submit" class="submit-button">Log in</button>
            </form>
        </div>
    </main>
</x-app-layout>