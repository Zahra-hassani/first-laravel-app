<div style=" font-family: sans-serif;">
    <h1 style="text-align:center;">All teachers</h1>
    <div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 8px; width: 100%; margin: 10px auto;">
        @foreach ($teachers as  $teacher)
        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: fit-content; height: 400px; gap: 6px; border: 1px solid black; border-radius: 20px; padding: 12px;">
            <div style=" height: 100%; width: calc(1/3); display: flex; justify-content: center; align-items: center; padding: 10px;">
                <img src="./user.png" style="height: 100px; width: 100px; border-radius: 50%;" alt="">
            </div>
            <div style="height: 100%; width: calc(2/3); display: flex; flex-direction: column; align-items: flex-start; gap: 8px;">
        <h1>Name: {{ $teacher->name }}</h1>
        <h2>Last Name: {{ $teacher->lastName }}</h2>
        <h2>Age: {{ $teacher->age }}</h2>
        <h2>Gender: 
            @if ($teacher->gender == "m")
            Male
            @else
            Female
            @endif
        </h2>
        </div>
        </div>
        @endforeach
    </div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
