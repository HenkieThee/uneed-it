@vite(['resources/css/verzoekenstyle.css'])

<x-app-layout>
    <h1>Verzoeken</h1>
    <div class="requests-container max-h-full overflow-y-auto">
        @foreach ($requests as $request)
            <div class="request">
                <div class="user-info">
                    <h2>Klantgegevens</h2>
                    <div class="Klantgegevens">
                        <p><strong>Naam:</strong> {{ $request->naam }}</p>
                        <p><strong>Telefoonnummer:</strong> {{ $request->telefoonnummer }}</p>
                        <p><strong>Email:</strong> {{ $request->email }}</p>
                        <p><strong>Adres:</strong> {{ $request->address }}</p>
                    </div>
                </div>
                <div class="request-info">
                    <h2>Verzoekdetails</h2>
                    <p><strong>Omschrijving:</strong><br>{{ $request->omschrijving }}</p>
                    <div class="Klantgegevens">
                        <p><strong>Typemachine:</strong> {{ $request->typemachine }}</p>
                        <p><strong>Garantie:</strong> {{ $request->garantie }}</p>
                        <p><strong>Datum:</strong> {{ $request->datum }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>

