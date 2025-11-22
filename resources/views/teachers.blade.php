<div>
    <div style="display: flex; justify-content: center; align-items: cemter; flex-wrap: wrap; gap: 8px; width: 80%; margin: 10px auto;">
        @foreach ($teachers as  $teacher)
        <div style="display: flex; flex-direction: column; align-items: center; gap: 6px; border: 1px solid black; border-radius: 10px; padding: 8px;">
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
        @endforeach
    </div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
