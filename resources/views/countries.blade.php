<div style="display: flex; flex-direction: column; gap: 14px; align-items: center;">
    <h1 style=" font-size: 30px; font-family: sans-serif;text-align: center;">All countries</h1>
<div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr; gap: 8px;">
    @foreach ($countries as $country)
    <div style=" display: inline; height: 100%; width: 100%; border: 1px solid black; border-radius: 8px;">
        <h1 style="text-align: center; font-size: large; padding: 2px 8px;">{{ $country->name }}</h1>
        <h1 id="code" style="text-align: center; font-size: large; padding: 2px 8px;">{{ $country->code }}</h1>
    </div>
    @endforeach
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
</div>
