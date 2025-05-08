<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Sistem Absensi Dosen</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #3c6382;
            color: white;
            padding-top: 20px;
            transition: all 0.3s;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 15px;
        }

        .sidebar-user {
            padding: 15px;
            text-align: center;
            margin-bottom: 15px;
        }

        .user-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #f0f0f0;
            margin: 0 auto 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #3c6382;
            font-weight: bold;
        }

        .sidebar-menu {
            padding: 0;
            list-style: none;
        }

        .sidebar-menu li {
            padding: 10px 15px;
            transition: background-color 0.3s;
        }

        .sidebar-menu li:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar-menu li a {
            color: white;
            text-decoration: none;
            display: block;
        }

        .sidebar-menu li i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }

        .navbar {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            padding: 15px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background-color: white;
            border-bottom: 1px solid #f0f0f0;
            padding: 15px 20px;
            font-weight: 600;
        }

        .card-body {
            padding: 20px;
        }

        .stat-card {
            padding: 20px;
            border-radius: 8px;
            color: white;
        }

        .stat-card.primary {
            background-color: #3c6382;
        }

        .stat-card.success {
            background-color: #20bf6b;
        }

        .stat-card.warning {
            background-color: #f7b731;
        }

        .stat-card.info {
            background-color: #0fb9b1;
        }

        .stat-card-number {
            font-size: 2rem;
            font-weight: bold;
        }

        .stat-card-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .stat-card-icon {
            font-size: 2.5rem;
            opacity: 0.3;
            position: absolute;
            right: 20px;
            bottom: 20px;
        }

        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }

        .activity-log {
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .activity-time {
            font-size: 0.8rem;
            color: #6c757d;
        }

        .search-form {
            display: flex;
            margin-bottom: 1rem;
        }

        .search-form input {
            border-radius: 5px 0 0 5px;
        }

        .search-form button {
            border-radius: 0 5px 5px 0;
            background-color: #3c6382;
            color: white;
            border: none;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h5>SISTEM ABSENSI</h5>
            <small>Universitas Faletehan</small>
        </div>
        <ul class="sidebar-menu">
            <ul class="sidebar-menu">
                <li class="active" data-page="dashadmin"><a href="dashadmin"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li data-page="keldos"><a href="keldos"><i class="fas fa-clipboard-list"></i> Kelola Dosen</a></li>
                <li data-page="kelmatkul"><a href="kelmatkul"><i class="fas fa-book"></i> Kelola Mata Kuliah</a></li>
                <li data-page="jadwal"><a href="jadwal"><i class="fas fa-calendar-alt"></i> Kelola Jadwal</a></li>
                <li data-page="datab"><a href="datab"><i class="fas fa-clipboard-check"></i> Data Absensi</a></li>
                <li data-page="laporan"><a href="laporan"><i class="fas fa-file-alt"></i> Laporan</a></li>
                <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Navbar -->
        <div class="navbar d-flex justify-content-between">
            <div>
                <h5 class="mb-0">Dashboard Admin</h5>
            </div>
            <div>
                <span><i class="far fa-user"></i> Administrator</span>
            </div>
        </div>

        <!-- Statistics -->
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="stat-card primary position-relative">
                        <div class="stat-card-number">42</div>
                        <div class="stat-card-label">Total Dosen</div>
                        <i class="fas fa-user-tie stat-card-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="stat-card success position-relative">
                        <div class="stat-card-number">96</div>
                        <div class="stat-card-label">Total Mata Kuliah</div>
                        <i class="fas fa-book stat-card-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="stat-card warning position-relative">
                        <div class="stat-card-number">85%</div>
                        <div class="stat-card-label">Tingkat Kehadiran</div>
                        <i class="fas fa-chart-line stat-card-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="stat-card info position-relative">
                        <div class="stat-card-number">24</div>
                        <div class="stat-card-label">Absensi Hari Ini</div>
                        <i class="fas fa-clipboard-check stat-card-icon"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="row">
            <!-- Dosen yang Belum Absen -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-exclamation-triangle me-2"></i> Dosen yang Belum Absen Hari Ini</span>
                        <a href="absensi" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                    </div>
                    <div class="card-body">
                        <div class="search-form">
                            <input type="text" class="form-control" placeholder="Cari dosen...">
                            <button type="submit" class="btn"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nama Dosen</th>
                                        <th>Mata Kuliah</th>
                                        <th>Jadwal</th>
                                        <th>Ruangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dr. Ahmad Fauzi</td>
                                        <td>Algoritma Pemrograman</td>
                                        <td>10:30 - 13:00</td>
                                        <td>Lab 2</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-bell"></i>
                                                Ingatkan</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Siti Rahma</td>
                                        <td>Basis Data</td>
                                        <td>13:00 - 15:30</td>
                                        <td>R. 3.2</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-bell"></i>
                                                Ingatkan</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Budi Santoso, M.Kom</td>
                                        <td>Jaringan Komputer</td>
                                        <td>15:30 - 18:00</td>
                                        <td>Lab 4</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-bell"></i>
                                                Ingatkan</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aktivitas Terbaru & Ringkasan -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-history me-2"></i> Aktivitas Terbaru
                    </div>
                    <div class="card-body">
                        <div class="activity-log">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>Dr. Rina Wijaya</strong> melakukan absensi
                                </div>
                                <div class="activity-time">10 menit yang lalu</div>
                            </div>
                            <div class="text-muted">Mata Kuliah: Pemrograman Web (08:00 - 10:30)</div>
                        </div>
                        <div class="activity-log">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>Admin</strong> menambahkan jadwal baru
                                </div>
                                <div class="activity-time">45 menit yang lalu</div>
                            </div>
                            <div class="text-muted">Mata Kuliah: Kecerdasan Buatan (Selasa, 10:30 - 13:00)</div>
                        </div>
                        <div class="activity-log">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>Rudi Hermawan, M.Sc</strong> mengajukan izin
                                </div>
                                <div class="activity-time">1 jam yang lalu</div>
                            </div>
                            <div class="text-muted">Mata Kuliah: Statistika Komputasi (Izin Sakit)</div>
                        </div>
                        <div class="activity-log">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>Admin</strong> memperbarui data dosen
                                </div>
                                <div class="activity-time">2 jam yang lalu</div>
                            </div>
                            <div class="text-muted">Dosen: Dr. Fajar Ramadhan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>