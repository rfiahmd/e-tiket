<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Akun Anda</title>
</head>
<body>
    <p>
        Halo <b>{{ $details['name'] }}</b>
    </p>
    <br>
    <p>
        Berikut ini adalah data Anda : 
    </p>
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>{{ $details['name'] }}</td>
        </tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td>{{ $details['role'] }}</td>
        </tr>
        <tr>
            <td>Website</td>
            <td>:</td>
            <td>{{ $details['website'] }}</td>
        </tr>
        <tr>
            <td>Tanggal Register</td>
            <td>:</td>
            <td>{{ $details['datetime'] }}</td>
        </tr>
    </table>
    <br><br><br>
    <center>
        <h3>Klik dibawah ini untuk verifikasi akun anda : </h3>
        <a href="{{ $details['url'] }}" style="text-decoration: none; color: rgb(255, 255, 255); padding: 10px; background-color: blue; font: bold; border-radius: 5%">Verifikasi</a>
        <br><br><br>
        <p>
            Copy right @ 2024  |  E-Tiket Wisata Sumenep
        </p>
    </center>
</body>
</html>