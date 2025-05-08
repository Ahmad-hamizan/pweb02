<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Profile Saya</title>
    </head>
    <body>
        @php $username = "Mijan"; $role = "Admin"; @endphp
        <h1>Prodi {{ !empty($prodi) ? $prodi : "Sistem Informasi" }}</h1>

        @if($role == "admin")
        <h2>Selamat datang, {{ $username }}!, anda adalah {{ $role }}</h2>
        @else
        <h2>Selamat datang, {{ $username }}!, anda adalah user</h2>
        @endif
    </body>
</html>
