<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>
</head>
<body>

    <h1>Formulir Pegawai</h1>

    <form action="/formulir/proses" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        Nama :
        <input type="text" name="nama"><br>
        Alamat :
        <input type="text" name="alamat"><br>
        <input type="submit" value="simpan">
    </form>

</body>
</html>
