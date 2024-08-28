<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
</head>

<body>

    <h1>Bioadata</h1>
    <p>Parsing data Laravel</p>
    <br>
    <hr>
    <p>Nama : {{ $nama }}</p>
    <p>Mata Kuliah :</p>
    <ul>
        @foreach ($matkul as $m)
            <li>{{ $m }}</li>
        @endforeach
    </ul>

</body>

</html>
