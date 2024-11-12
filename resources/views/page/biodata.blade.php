<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Biodata</title>
</head>
<body>
    <h1>Halaman Biodata</h1>
    <form action="{{ url('/send') }}" method="post">
        @csrf

        <label for="fullName">Nama Lengkap</label>
        <input type="text" name="fullName"> <br>

        <label for="address">Alamat</label>
        <textarea name="address"></textarea> <br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
