<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="post">
        @csrf
        <label for="">Nama Lengkap</label>
        <input type="text" name="name">
        <label for="">NIK</label>
        <input type="text" name="nik">
        <label for="">Password</label>
        <input type="password" name="password">
        <button type="submit">login</button>
    </form>
</body>
</html>