<div>
    <h1 style="text-align: center;">All Students</h1>
    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 10px;">
    @foreach ($students as $student)
    <div style=" font-family: sans-serif; border: 1px solid black; border-radius: 15px; padding: 12px; display: flex; flex-direction: column; align-items: center; gap: 5px;">
        <h1 style=" font-size: 40px;">🧑‍🎓</h1>
        <h1 style=" text-align: center; font-weight: bold;">{{ $student->name }} {{ $student->lastName }}</h1>
        <h2 style=" text-align: center; ">Grade: {{ $student->grade }}</h2>
        <h2 style=" text-align: center; ">Total Score: {{ $student->score }}</h2>
        <button style=" padding: 10px 24px; border-radius: 10px; border: 0; background-color: black; font-weight: bold;"><a style=" color: white; text-decoration: none;" href="#">Delete</a></button>
    </div>
    @endforeach
    </div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
