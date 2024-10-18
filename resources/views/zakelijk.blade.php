<x-app-layout>
    @vite(['resources/css/zakelijkstyle.css', 'resources/js/zakelijkscript.js'])
    @php 
        $user = session('user', null);

        if ($user === null) {
            return redirect('login_or_signup')->send();
        }
    @endphp

    <main id="mainZakelijk">
        <div class="block-text">
            <h1>Welkom!</h1>
            <p>We zijn blij om u te kunnen helpen. Hoe kunnen wij assisteren?</p>
            <div class="buttons">
                <a href="{{ url('bestellen') }}"><button>Ontvang hulp</button></a>
                <button id="verzoekenBtn" style="display: none;" onclick="viewRequests()">Verzoeken bekijken</button>
            </div>
        </div>
    </main>
    <script>
        window.onload = function() {
            @if(isset($user) && $user['role'] === 'admin')
                document.getElementById("verzoekenBtn").style.display = "block";
                document.getElementById("verzoekenBtn").addEventListener("click", function() {
                    window.location.href = "{{ url('verzoeken') }}";
                });
            @endif
        };
    </script>
</x-app-layout>