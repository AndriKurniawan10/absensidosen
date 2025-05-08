<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Absensi Dosen</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
        }

        .login-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .login-header {
            background-color: #3c6382;
            color: white;
            padding: 25px 20px;
            text-align: center;
        }

        .login-body {
            padding: 30px;
        }

        .logo {
            width: 70px;
            height: 70px;
            margin-bottom: 15px;
        }

        .form-control {
            padding: 12px;
            border-radius: 5px;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(60, 99, 130, 0.25);
            border-color: #3c6382;
        }

        .btn-primary {
            background-color: #3c6382;
            border-color: #3c6382;
            padding: 10px 20px;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #2d4b64;
            border-color: #2d4b64;
        }

        .input-group-text {
            background-color: transparent;
            border-right: none;
        }

        .form-control.left-border-none {
            border-left: none;
        }

        .icon-container {
            width: 70px;
            height: 70px;
            background-color: #3c6382;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h5 class="mb-1">SISTEM ABSENSI</h5>
                <small>Universitas Faletehan</small>
            </div>
            <div class="login-body text-center">
                <div class="icon-container">
                    <i class="fas fa-check-circle text-white fa-2x"></i>
                </div>
                <h4 class="mb-3">Logout Berhasil</h4>
                <p class="text-muted mb-4">Anda telah berhasil keluar dari sistem. Terima kasih telah menggunakan Sistem
                    Absensi Universitas Faletehan.</p>

                <a href="login.html" class="btn btn-primary w-100">
                    <i class="fas fa-sign-in-alt me-2"></i> Kembali ke Halaman Login
                </a>
            </div>
        </div>
        <div class="text-center mt-3 text-muted">
            <small>©️ 2025 Universitas Faletehan. All rights reserved.</small>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto redirect after 5 seconds
        setTimeout(function() {
            window.location.href = 'login.html';
        }, 5000);
    </script>
</body>

</html>