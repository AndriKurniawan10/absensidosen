<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Absensi Dosen - Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #f0f0f0;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: #3c6382;
            font-weight: bold;
        }

        .login-title {
            text-align: center;
            margin-bottom: 25px;
            color: #3c6382;
        }

        .form-control {
            border-radius: 5px;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #dcdcdc;
        }

        .btn-login {
            background-color: #3c6382;
            border: none;
            border-radius: 5px;
            padding: 12px;
            width: 100%;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #2c3e50;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="logo-container">
                <div class="logo">UF</div>
            </div>
            <h4 class="login-title">SISTEM ABSENSI DOSEN</h4>
            <h6 class="text-center mb-4">Universitas Faletehan</h6>

            <form action="{{ route('login.process') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-login">LOGIN</button>
                </div>
            </form>

            <div class="footer">
                &copy; Andri Kurniawan - 2025 Universitas Faletehan - Sistem Absensi Dosen
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Simulasi validasi login (nanti akan diganti dengan actual AJAX request)
            if (username && password) {
                // Redirect ke dashboard (contoh saja)
                alert('Login berhasil! Anda akan diarahkan ke dashboard.');
                // window.location.href = 'dashboard.html';
            } else {
                alert('Username dan password harus diisi!');
            }
        });
    </script>
</body>

</html>