<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Absensi Dosen - Sistem Absensi Dosen</title>
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

        .table th {
            font-weight: 600;
            background-color: #f8f9fa;
        }

        .filter-section {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #3c6382;
            border-color: #3c6382;
        }

        .btn-primary:hover {
            background-color: #2c5178;
            border-color: #2c5178;
        }

        .btn-success {
            background-color: #20bf6b;
            border-color: #20bf6b;
        }

        .btn-success:hover {
            background-color: #1bad5f;
            border-color: #1bad5f;
        }

        .btn-warning {
            background-color: #f7b731;
            border-color: #f7b731;
        }

        .btn-warning:hover {
            background-color: #e6a929;
            border-color: #e6a929;
        }

        .badge {
            padding: 6px 10px;
            font-weight: normal;
        }

        .form-select,
        .form-control {
            border-radius: 5px;
            border: 1px solid #dee2e6;
            padding: 8px 12px;
        }

        .pagination .page-link {
            color: #3c6382;
        }

        .pagination .page-item.active .page-link {
            background-color: #3c6382;
            border-color: #3c6382;
        }

        .tab-content {
            padding-top: 20px;
        }

        .nav-tabs .nav-link {
            color: #495057;
            font-weight: 500;
        }

        .nav-tabs .nav-link.active {
            color: #3c6382;
            font-weight: 600;
        }

        .search-form {
            display: flex;
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
            <li class="active" data-page="dashadmin"><a href="dashadmin"><i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li data-page="keldos"><a href="keldos"><i class="fas fa-clipboard-list"></i> Kelola Dosen</a></li>
            <li data-page="kelmatkul"><a href="kelmatkul"><i class="fas fa-book"></i> Kelola Mata Kuliah</a></li>
            <li data-page="jadwal"><a href="jadwal"><i class="fas fa-calendar-alt"></i> Kelola Jadwal</a></li>
            <li data-page="datab"><a href="datab"><i class="fas fa-clipboard-check"></i> Data Absensi</a></li>
            <li data-page="laporan"><a href="laporan"><i class="fas fa-file-alt"></i> Laporan</a></li>
            <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Navbar -->
        <div class="navbar d-flex justify-content-between">
            <div>
                <h5 class="mb-0">Data Absensi Dosen</h5>
            </div>
            <div>
                <span><i class="far fa-user"></i> Administrator</span>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="card">
            <div class="card-body filter-section">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control" value="2025-04-02">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Program Studi</label>
                        <select class="form-select">
                            <option value="">Semua Program Studi</option>
                            <option value="1">Teknik Informatika</option>
                            <option value="2">Sistem Informasi</option>
                            <option value="3">Teknik Komputer</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Mata Kuliah</label>
                        <select class="form-select">
                            <option value="">Semua Mata Kuliah</option>
                            <option value="1">Algoritma Pemrograman</option>
                            <option value="2">Basis Data</option>
                            <option value="3">Jaringan Komputer</option>
                            <option value="4">Pemrograman Web</option>
                            <option value="5">Kecerdasan Buatan</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option value="">Semua Status</option>
                            <option value="1">Hadir</option>
                            <option value="2">Tidak Hadir</option>
                            <option value="3">Izin</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-8">
                        <div class="search-form">
                            <input type="text" class="form-control" placeholder="Cari berdasarkan nama dosen...">
                            <button type="submit" class="btn px-3"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <button class="btn btn-primary me-2"><i class="fas fa-filter me-1"></i> Terapkan Filter</button>
                        <button class="btn btn-outline-secondary"><i class="fas fa-redo me-1"></i> Reset</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs" id="absensiTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button"
                    role="tab" aria-controls="all" aria-selected="true">Semua Data</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="not-present-tab" data-bs-toggle="tab" data-bs-target="#not-present"
                    type="button" role="tab" aria-controls="not-present" aria-selected="false">Belum
                    Absen</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="present-tab" data-bs-toggle="tab" data-bs-target="#present"
                    type="button" role="tab" aria-controls="present" aria-selected="false">Hadir</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="leave-tab" data-bs-toggle="tab" data-bs-target="#leave" type="button"
                    role="tab" aria-controls="leave" aria-selected="false">Izin</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="absensiTabsContent">
            <!-- All Data Tab -->
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Rekap Data Absensi - Rabu, 02 April 2025</span>
                        <div>
                            <button class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-print me-1"></i>
                                Cetak</button>
                            <button class="btn btn-sm btn-outline-success"><i class="fas fa-file-excel me-1"></i>
                                Ekspor Excel</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dosen</th>
                                        <th>Mata Kuliah</th>
                                        <th>Jadwal</th>
                                        <th>Ruangan</th>
                                        <th>Status</th>
                                        <th>Waktu Absen</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Rina Wijaya, M.Sc</td>
                                        <td>Pemrograman Web</td>
                                        <td>08:00 - 10:30</td>
                                        <td>Lab 1</td>
                                        <td><span class="badge bg-success">Hadir</span></td>
                                        <td>08:05</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-bs-toggle="tooltip"
                                                title="Detail"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Edit"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Rudi Hermawan, M.Sc</td>
                                        <td>Akuntansi Dasar</td>
                                        <td>08:00 - 10:30</td>
                                        <td>R. 2.1</td>
                                        <td><span class="badge bg-warning text-dark">Izin</span></td>
                                        <td>-</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-bs-toggle="tooltip"
                                                title="Detail"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Edit"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ahmad Fauzi, M.Kom</td>
                                        <td>Algoritma Pemrograman</td>
                                        <td>10:30 - 13:00</td>
                                        <td>Lab 2</td>
                                        <td><span class="badge bg-danger">Belum Absen</span></td>
                                        <td>-</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Input Manual"><i class="fas fa-clipboard-check"></i></button>
                                            <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                title="Ingatkan"><i class="fas fa-bell"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dewi Nuraeni, S.Kom</td>
                                        <td>Basis Data</td>
                                        <td>13:00 - 15:30</td>
                                        <td>R. 3.2</td>
                                        <td><span class="badge bg-danger">Belum Absen</span></td>
                                        <td>-</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Input Manual"><i class="fas fa-clipboard-check"></i></button>
                                            <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                title="Ingatkan"><i class="fas fa-bell"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Budi Santoso, M.Kom</td>
                                        <td>Sisteem Informasi Manajemen</td>
                                        <td>15:30 - 18:00</td>
                                        <td>Lab 4</td>
                                        <td><span class="badge bg-danger">Belum Absen</span></td>
                                        <td>-</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Input Manual"><i class="fas fa-clipboard-check"></i></button>
                                            <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                title="Ingatkan"><i class="fas fa-bell"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Hendra Aditya, S.H., M.H.</td>
                                        <td>Sistem Operasi</td>
                                        <td>08:00 - 10:30</td>
                                        <td>Lab 3</td>
                                        <td><span class="badge bg-success">Hadir</span></td>
                                        <td>07:55</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-bs-toggle="tooltip"
                                                title="Detail"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Edit"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Fajar Ramadhan</td>
                                        <td>Kecerdasan Buatan</td>
                                        <td>10:30 - 13:00</td>
                                        <td>R. 4.3</td>
                                        <td><span class="badge bg-success">Hadir</span></td>
                                        <td>10:15</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-bs-toggle="tooltip"
                                                title="Detail"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Edit"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                Menampilkan 1-7 dari 42 data
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Not Present Tab -->
            <div class="tab-pane fade" id="not-present" role="tabpanel" aria-labelledby="not-present-tab">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Dosen yang Belum Absen - Rabu, 02 April 2025</span>
                        <div>
                            <button class="btn btn-sm btn-warning me-2"><i class="fas fa-bell me-1"></i> Ingatkan
                                Semua</button>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-print me-1"></i>
                                Cetak</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dosen</th>
                                        <th>Mata Kuliah</th>
                                        <th>Jadwal</th>
                                        <th>Ruangan</th>
                                        <th>Kontak</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Ahmad Fauzi</td>
                                        <td>Algoritma Pemrograman</td>
                                        <td>10:30 - 13:00</td>
                                        <td>Lab 2</td>
                                        <td>0812-3456-7890</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Input Manual"><i class="fas fa-clipboard-check"></i></button>
                                            <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                title="Ingatkan"><i class="fas fa-bell"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Siti Rahma</td>
                                        <td>Basis Data</td>
                                        <td>13:00 - 15:30</td>
                                        <td>R. 3.2</td>
                                        <td>0813-4567-8901</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Input Manual"><i class="fas fa-clipboard-check"></i></button>
                                            <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                title="Ingatkan"><i class="fas fa-bell"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Budi Santoso, M.Kom</td>
                                        <td>Jaringan Komputer</td>
                                        <td>15:30 - 18:00</td>
                                        <td>Lab 4</td>
                                        <td>0814-5678-9012</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Input Manual"><i class="fas fa-clipboard-check"></i></button>
                                            <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                title="Ingatkan"><i class="fas fa-bell"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Present Tab -->
            <div class="tab-pane fade" id="present" role="tabpanel" aria-labelledby="present-tab">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Dosen yang Hadir - Rabu, 02 April 2025</span>
                        <div>
                            <button class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-print me-1"></i>
                                Cetak</button>
                            <button class="btn btn-sm btn-outline-success"><i class="fas fa-file-excel me-1"></i>
                                Ekspor Excel</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dosen</th>
                                        <th>Mata Kuliah</th>
                                        <th>Jadwal</th>
                                        <th>Ruangan</th>
                                        <th>Waktu Absen</th>
                                        <th>Metode</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Rina Wijaya</td>
                                        <td>Pemrograman Web</td>
                                        <td>08:00 - 10:30</td>
                                        <td>Lab 1</td>
                                        <td>08:05</td>
                                        <td>QR Code</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-bs-toggle="tooltip"
                                                title="Detail"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Edit"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dian Kusuma, M.Kom</td>
                                        <td>Sistem Operasi</td>
                                        <td>08:00 - 10:30</td>
                                        <td>Lab 3</td>
                                        <td>07:55</td>
                                        <td>QR Code</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-bs-toggle="tooltip"
                                                title="Detail"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Edit"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Fajar Ramadhan</td>
                                        <td>Rekayasa Perangkat Lunak</td>
                                        <td>10:30 - 13:00</td>
                                        <td>R. 4.3</td>
                                        <td>10:15</td>
                                        <td>QR Code</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-bs-toggle="tooltip"
                                                title="Detail"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                                title="Edit"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Leave Tab -->
            <div class="tab-pane fade" id="leave" role="tabpanel" aria-labelledby="leave-tab">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Dosen dengan Izin - Rabu, 02 April 2025</span>
                        <div>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-print me-1"></i>
                                Cetak</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dosen</th>
                                        <th>Mata Kuliah</th>
                                        <th>Jadwal</th>
                                        <th>Ruangan</th>
                                        <th>Alasan</th>
                                        <th>Bukti</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>