<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Point | Registration</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="form">
        <form action="/registration" method="post">
            @csrf
            <input type="text" name="name" placeholder="Nama Lengkap">
            <input type="text" name="nik" placeholder="NIK">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password">
            <button><a href="/login">Sudah punya akun</a></button>
            <button type="submit">Buat Akun</button>
        </form>
    </div>
</body>

</html>
