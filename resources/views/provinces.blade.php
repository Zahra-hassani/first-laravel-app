<div>
    <h1 style="font-size: 40px; font-family: sans-serif; text-align: center; font-weight: bold;">All Afghanistan Provinces</h1>
    <div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 8px; width: 60%; margin: 5px auto;">
    @foreach ($provinces as $province)
    <h1 style="font-family: sans-serif; text-align: center; height: 100%; width: 100%; margin: 2px auto; background-color: gainsboro; border-radius: 0 10px 10px 0; border-left: 2px purple solid; padding: 7px 14px; text-align: center; font-size: 26px;" class="animate-items">{{ $province->name }}</h1>
    @endforeach
</div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div>
