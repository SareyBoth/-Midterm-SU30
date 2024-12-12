<!-- job/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
</head>
<body>

    <h1>Job List</h1>

    <ul>
        @foreach ($job as $item)
            <li>{{ $item->title }} - {{ $item->company }}</li>
        @endforeach
    </ul>
    @php
        dd($job)
    @endphp

</body>
</html>
