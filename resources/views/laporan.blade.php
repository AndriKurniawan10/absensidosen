<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Absensi - Sistem Absensi Dosen</title>
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

        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }

        .filter-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #3c6382;
            border-color: #3c6382;
        }

        .btn-primary:hover {
            background-color: #34526e;
            border-color: #34526e;
        }

        .btn-outline-primary {
            color: #3c6382;
            border-color: #3c6382;
        }

        .btn-outline-primary:hover {
            background-color: #3c6382;
            color: white;
        }

        .badge-success {
            background-color: #20bf6b;
            color: white;
        }

        .badge-warning {
            background-color: #f7b731;
            color: white;
        }

        .badge-danger {
            background-color: #eb3b5a;
            color: white;
        }

        .page-link {
            color: #3c6382;
        }

        .page-item.active .page-link {
            background-color: #3c6382;
            border-color: #3c6382;
        }

        .summary-stats {
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .summary-title {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .summary-value {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0;
        }

        .chart-container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .export-options .btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 8px 16px;
        }

        .nav-tabs .nav-item .nav-link {
            color: #495057;
            border: none;
            border-bottom: 2px solid transparent;
        }

        .nav-tabs .nav-item .nav-link.active {
            color: #3c6382;
            background-color: transparent;
            border-bottom: 2px solid #3c6382;
        }

        .date-input {
            position: relative;
        }

        .date-input i {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            pointer-events: none;
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
                <h5 class="mb-0">Laporan Absensi</h5>
            </div>
            <div>
                <span id="user-display"><i class="far fa-user"></i> Administrator</span>
            </div>
        </div>

        <!-- Nav Tabs -->
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <a class="nav-link active" id="summary-tab" data-bs-toggle="tab" href="#summary">Ringkasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="dosen-tab" data-bs-toggle="tab" href="#dosen">Kehadiran Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="mk-tab" data-bs-toggle="tab" href="#mk">Kehadiran per MK</a>
            </li>
        </ul>

        <!-- Filter Card -->
        <div class="card filter-card">
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3 mb-md-0">
                        <label class="form-label">Periode</label>
                        <select class="form-select">
                            <option selected>Mingguan</option>
                            <option>Bulanan</option>
                            <option>Semester</option>
                            <option>Tahunan</option>
                            <option>Kustom</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 mb-md-0 date-input">
                        <label class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" value="2025-03-26">
                        <i class="far fa-calendar"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 mb-md-0 date-input">
                        <label class="form-label">Tanggal Akhir</label>
                        <input type="date" class="form-control" value="2025-04-02">
                        <i class="far fa-calendar"></i>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button class="btn btn-primary w-100">
                        <i class="fas fa-filter me-2"></i> Terapkan Filter
                    </button>
                </div>
            </div>
        </div>

        <!-- Tab Contents -->
        <div class="tab-content">
            <!-- Summary Tab -->
            <div class="tab-pane fade show active" id="summary">
                <!-- Stats Row -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="summary-stats">
                            <div class="summary-title">Total Pertemuan</div>
                            <div class="summary-value">247</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="summary-stats">
                            <div class="summary-title">Tingkat Kehadiran</div>
                            <div class="summary-value">92%</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="summary-stats">
                            <div class="summary-title">Izin/Sakit</div>
                            <div class="summary-value">5%</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="summary-stats">
                            <div class="summary-title">Tanpa Keterangan</div>
                            <div class="summary-value">3%</div>
                        </div>
                    </div>
                </div>
                <!-- Export Section -->
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Laporan Ringkasan</span>
                        <div class="export-options">
                            <button class="btn btn-outline-primary me-2" id="exportExcel">
                                <i class="fas fa-file-excel"></i> Export Excel
                            </button>
                            <button class="btn btn-outline-secondary">
                                <i class="fas fa-print"></i> Cetak
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="summaryTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>Program Studi</th>
                                        <th>Total Pertemuan</th>
                                        <th>Hadir</th>
                                        <th>Izin/Sakit</th>
                                        <th>Tanpa Keterangan</th>
                                        <th>Tingkat Kehadiran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Informatika</td>
                                        <td>96</td>
                                        <td>88</td>
                                        <td>5</td>
                                        <td>3</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 92%;" aria-valuenow="92" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>92%</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Arsitek</td>
                                        <td>78</td>
                                        <td>70</td>
                                        <td>6</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>90%</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Teknik Elektro</td>
                                        <td>45</td>
                                        <td>43</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 96%;" aria-valuenow="96" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>96%</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Teknik Sipil</td>
                                        <td>28</td>
                                        <td>24</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 86%;" aria-valuenow="86" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>86%</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Teknik Industri</td>
                                        <td>28</td>
                                        <td>24</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 86%;" aria-valuenow="86" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>86%</small>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dosen Tab -->
            <div class="tab-pane fade" id="dosen">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Laporan Kehadiran per Dosen</span>
                        <div class="export-options">
                            <button class="btn btn-outline-primary me-2"
                                onclick="exportTableToExcel('dosenTable', 'Laporan_Kehadiran_Dosen')">
                                <i class="fas fa-file-excel"></i> Export Excel
                            </button>
                            <button class="btn btn-outline-secondary">
                                <i class="fas fa-print"></i> Cetak
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari dosen...">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option selected>Semua Program Studi</option>
                                    <option>Teknik Informatika</option>
                                    <option>Sistem Informasi</option>
                                    <option>Teknik Elektro</option>
                                    <option>Manajemen</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option selected>Urutkan berdasarkan</option>
                                    <option>Tingkat Kehadiran (Tertinggi)</option>
                                    <option>Tingkat Kehadiran (Terendah)</option>
                                    <option>Nama (A-Z)</option>
                                    <option>Nama (Z-A)</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dosenTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dosen</th>
                                        <th>Program Studi</th>
                                        <th>Total Jadwal</th>
                                        <th>Hadir</th>
                                        <th>Izin/Sakit</th>
                                        <th>Tanpa Keterangan</th>
                                        <th>Tingkat Kehadiran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Rina Wijaya</td>
                                        <td>Teknik Informatika</td>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>100%</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Ahmad Fauzi</td>
                                        <td>Teknik Informatika</td>
                                        <td>10</td>
                                        <td>8</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 80%;" aria-valuenow="80" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>80%</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Siti Rahma</td>
                                        <td>Sistem Informasi</td>
                                        <td>8</td>
                                        <td>7</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 88%;" aria-valuenow="88" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>88%</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Budi Santoso, M.Kom</td>
                                        <td>Teknik Informatika</td>
                                        <td>14</td>
                                        <td>12</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 86%;" aria-valuenow="86" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>86%</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Rudi Hermawan, M.Sc</td>
                                        <td>Teknik Elektro</td>
                                        <td>9</td>
                                        <td>8</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 89%;" aria-valuenow="89" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>89%</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Dr. Fajar Ramadhan</td>
                                        <td>Manajemen</td>
                                        <td>8</td>
                                        <td>6</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>75%</small>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination -->
                        <nav aria-label="Page navigation" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"
                                        aria-disabled="true">Sebelumnya</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Selanjutnya</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Mata Kuliah Tab -->
            <div class="tab-pane fade" id="mk">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Laporan Kehadiran per Mata Kuliah</span>
                        <div class="export-options">
                            <button class="btn btn-outline-primary me-2"
                                onclick="exportTableToExcel('mkTable', 'Laporan_Kehadiran_MK')">
                                <i class="fas fa-file-excel"></i> Export Excel
                            </button>
                            <button class="btn btn-outline-danger me-2">
                                <i class="fas fa-file-pdf"></i> Export PDF
                            </button>
                            <button class="btn btn-outline-secondary">
                                <i class="fas fa-print"></i> Cetak
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari mata kuliah...">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option selected>Semua Program Studi</option>
                                    <option>Teknik Informatika</option>
                                    <option>Sistem Informasi</option>
                                    <option>Teknik Elektro</option>
                                    <option>Manajemen</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option selected>Urutkan berdasarkan</option>
                                    <option>Tingkat Kehadiran (Tertinggi)</option>
                                    <option>Tingkat Kehadiran (Terendah)</option>
                                    <option>Nama (A-Z)</option>
                                    <option>Nama (Z-A)</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="mkTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode MK</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>Program Studi</th>
                                        <th>Dosen Pengampu</th>
                                        <th>Total Pertemuan</th>
                                        <th>Kehadiran</th>
                                        <th>Persentase</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>TI2023</td>
                                        <td>Algoritma Pemrograman</td>
                                        <td>Teknik Informatika</td>
                                        <td>Dr. Ahmad Fauzi</td>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small>100%</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>TI2045</td>
                                        <td>Basis Data</td>
                                        <td>Teknik Informatika</td>
                                        <td>Dr. Siti Rahma</td>
                                        <td>14</td>
                                        <td>13</td>
                                        <td>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 93%;" aria-valuenow="93" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    <!-- Tambahkan kode ini di bagian bawah file HTML, tepat sebelum tag </body>
        -->

                                                    <!-- Script Bootstrap -->
                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

                                                    <!-- Script tambahan untuk tab dan fungsi-fungsi lainnya -->
                                                    <script>
                                                        // Inisialisasi tab
                                                        document.addEventListener('DOMContentLoaded', function() {
                                                                    // Aktifkan tab Bootstrap
                                                                    var tabElements = document.querySelectorAll('a[data-bs-toggle="tab"]');
                                                                    tabElements.forEach(function(tabEl) {
                                                                        tabEl.addEventListener('click', function(e) {
                                                                            e.preventDefault();
                                                                            new bootstrap.Tab(tabEl).show();
                                                                        });
                                                                    });

                                                                    // Memastikan tab pertama aktif saat halaman dimuat
                                                                    var firstTab = document.querySelector('#summary-tab');
                                                                    if (firstTab) {
                                                                        new bootstrap.Tab(firstTab).show();
                                                                    }

                                                                    // Fungsi untuk export tabel ke Excel (contoh implementasi)
                                                                    window.exportTableToExcel = function(tableID, filename = '') {
                                                                        console.log(`Ekspor tabel ${tableID} ke Excel dengan nama file ${filename}`);
                                                                        // Di sini Anda bisa mengimplementasikan fungsi export Excel sebenarnya
                                                                        alert('Fungsi export Excel akan diimplementasikan di sini');
                                                                        // Contoh implementasi lengkap memerlukan library tambahan atau API
                                                                    };

                                                                    // Event listener untuk tombol export Excel di tab Summary
                                                                    document.getElementById('exportExcel').addEventListener('click', function() {
                                                                        exportTableToExcel('summaryTable', 'Laporan_Ringkasan');
                                                                    });

                                                                    // Fungsi untuk menyimpan tab aktif di localStorage agar bertahan saat refresh
                                                                    var triggerTabList = [].slice.call(document.querySelectorAll('a[data-bs-toggle="tab"]'));
                                                                    triggerTabList.forEach(function(triggerEl) {
                                                                        triggerEl.addEventListener('shown.bs.tab', function(e) {
                                                                            localStorage.setItem('activeTab', e.target.getAttribute('id'));
                                                                        });
                                                                    });

                                                                    // Fungsi untuk memulihkan tab aktif saat halaman di-refresh
                                                                    var activeTab = localStorage.getItem('activeTab');
                                                                    if (activeTab) {
                                                                        var triggerEl = document.querySelector('#' + activeTab);
                                                                        if (triggerEl) {
                                                                            new bootstrap.Tab(triggerEl).show();
                                                                        }
                                                                    }

                                                                    // Fungsi untuk memperbarui tanggal secara dinamis di navbar
                                                                    function updateCurrentDate() {
                                                                        var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                                                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
                                                                            'September', 'Oktober', 'November', 'Desember'
                                                                        ];
                                                                        var now = new Date();
                                                                        var dayName = days[now.getDay()];
                                                                        var day = now.getDate();
                                                                        var month = months[now.getMonth()];
                                                                        var year = now.getFullYear();
                                                                    });
                                                    </script>