<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - EyeCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background: #f4f4f9;
        }
        .container-fluid {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .register-box {
            display: flex;
            width: 90%;
            max-width: 900px;
            height: 90vh; /* Pastikan tetap full screen */
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }
        .left-box, .right-box {
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .left-box {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            text-align: center;
            padding: 40px;
        }
        .right-box {
            padding: 50px;
        }
        .left-box h2 {
            font-size: 2rem;
            font-weight: bold;
        }
        .btn-purple {
            background: white;
            color: #6a11cb;
            border-radius: 20px;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-purple:hover {
            background: #a56eff;
            color: white;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-signup {
            background: #6a11cb;
            border-radius: 20px;
            padding: 10px;
            color: white;
            font-weight: bold;
            width: 100%;
            border: none;
            transition: 0.3s;
        }
        .btn-signup:hover {
            background: #5a0fb4;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="register-box">
        <!-- Bagian Kiri -->
        <div class="left-box">
            <h2>Selamat Datang di Web EyeCare!</h2>
            <p>Segera periksa matamu, daftarkan diri anda dan mulai gunakan layanan kami segera.</p>
            <a href="{{ route('login') }}" class="btn-purple mt-3">SIGN IN</a>
        </div>

        <!-- Bagian Kanan -->
        <div class="right-box">
            <h2 class="text-center fw-bold">Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-signup mt-3">SIGN UP</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
