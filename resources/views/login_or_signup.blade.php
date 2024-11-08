<x-app-layout>
    @vite(['resources/css/registrationstyle.css'])

    <div class="container">
        <div class="login-signup">
            <h1>Het lijkt erop dat jij niet ingelogd bent!</h1>
            <button onclick="window.location.href='{{ url('login') }}'">Log In</button>
            <button onclick="window.location.href='{{ url('registration') }}'">Sign Up</button>
        </div>
    </div>
</x-app-layout>