<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Dosen - Sistem Absensi Dosen</title>
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

        .card-body {
            padding: 20px;
        }

        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #3c6382;
            color: white;
            font-weight: 600;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }

        .search-box {
            position: relative;
            margin-bottom: 20px;
        }

        .search-box .form-control {
            padding-left: 2.5rem;
            border-radius: 8px;
            border: 1px solid #ced4da;
        }

        .search-box .search-icon {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .stats-box {
            background-color: #fff;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .stats-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #3c6382;
        }

        .stats-label {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .active-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .active-dot.active {
            background-color: #20bf6b;
        }

        .active-dot.inactive {
            background-color: #eb3b5a;
        }

        .badge-fakultas {
            font-size: 0.7rem;
            padding: 0.25rem 0.5rem;
        }

        .badge-fakultas.ft {
            background-color: #3c6382;
        }

        .badge-fakultas.fk {
            background-color: #0fb9b1;
        }

        .badge-fakultas.fe {
            background-color: #f7b731;
        }

        .badge-fakultas.fh {
            background-color: #8854d0;
        }

        .modal-content {
            border-radius: 10px;
            border: none;
        }

        .modal-header {
            background-color: #3c6382;
            color: white;
            border-radius: 10px 10px 0 0;
        }

        .modal-footer {
            border-top: none;
        }

        .btn-primary {
            background-color: #3c6382;
            border-color: #3c6382;
        }

        .btn-primary:hover {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }

        .pagination {
            justify-content: center;
        }

        .page-item.active .page-link {
            background-color: #3c6382;
            border-color: #3c6382;
        }

        .page-link {
            color: #3c6382;
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
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Navbar -->
        <div class="navbar d-flex justify-content-between">
            <div>
                <h5 class="mb-0">Kelola Dosen</h5>
            </div>
            <div>
                <span><i class="far fa-user"></i> Administrator</span>
            </div>
        </div>

        <!-- Statistics Row -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="stats-box">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="stats-number">42</div>
                            <div class="stats-label">Total Dosen</div>
                        </div>
                        <div class="col-4 text-end">
                            <i class="fas fa-user-tie fa-2x text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="stats-number">38</div>
                            <div class="stats-label">Dosen Aktif</div>
                        </div>
                        <div class="col-4 text-end">
                            <i class="fas fa-user-check fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="stats-number">4</div>
                            <div class="stats-label">Dosen Nonaktif</div>
                        </div>
                        <div class="col-4 text-end">
                            <i class="fas fa-user-slash fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="stats-number">87%</div>
                            <div class="stats-label">Tingkat Kehadiran</div>
                        </div>
                        <div class="col-4 text-end">
                            <i class="fas fa-chart-line fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span><i class="fas fa-user-tie me-2"></i> Daftar Dosen</span>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addDosenModal">
                    <i class="fas fa-plus me-1"></i> Tambah Dosen
                </button>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="search-box">
                            <i class="fas fa-search search-icon"></i>
                            <input type="text" class="form-control"
                                placeholder="Cari berdasarkan nama, NIDN, atau fakultas...">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                        <div class="me-2">Filter:</div>
                        <select class="form-select form-select-sm me-2" style="width: auto;">
                            <option value="all">Semua Fakultas</option>
                            <option value="ft">Sains & Teknik</option>
                        </select>
                        <select class="form-select form-select-sm" style="width: auto;">
                            <option value="all">Semua Status</option>
                            <option value="active">Aktif</option>
                            <option value="inactive">Nonaktif</option>
                        </select>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>NIDN</th>
                                <th>Fakultas/Prodi</th>
                                <th>Status</th>
                                <th>Jumlah MK</th>
                                <th>Kehadiran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-2">AF</div>
                                        <div>
                                            <div>Ahmad Fauzi, M.Kom</div>
                                            <small class="text-muted">ahmad.fauzi@faletehan.ac.id</small>
                                        </div>
                                    </div>
                                </td>
                                <td>0410058801</td>
                                <td>
                                    <span class="badge badge-fakultas ft">FT</span>Informatika
                                </td>
                                <td><span class="active-dot active"></span> Aktif</td>
                                <td>4</td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 95%;"
                                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">95%</small>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-key me-2"></i>Reset Password</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item text-danger" href="#"><i
                                                        class="fas fa-user-slash me-2"></i>Nonaktifkan</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-2">RW</div>
                                        <div>
                                            <div>Rina Wijaya, M.Sc</div>
                                            <small class="text-muted">rina.wijaya@faletehan.ac.id</small>
                                        </div>
                                    </div>
                                </td>
                                <td>0415068901</td>
                                <td>
                                    <span class="badge badge-fakultas ft">FT</span>Informatika
                                </td>
                                <td><span class="active-dot active"></span> Aktif</td>
                                <td>3</td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%;"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">90%</small>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-key me-2"></i>Reset Password</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item text-danger" href="#"><i
                                                        class="fas fa-user-slash me-2"></i>Nonaktifkan</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-2">BS</div>
                                        <div>
                                            <div>Budi Santoso, M.Kom</div>
                                            <small class="text-muted">budi.santoso@faletehan.ac.id</small>
                                        </div>
                                    </div>
                                </td>
                                <td>0420059201</td>
                                <td>
                                    <span class="badge badge-fakultas ft">FT</span> Teknik Industri
                                </td>
                                <td><span class="active-dot active"></span> Aktif</td>
                                <td>5</td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%;"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">85%</small>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-key me-2"></i>Reset Password</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item text-danger" href="#"><i
                                                        class="fas fa-user-slash me-2"></i>Nonaktifkan</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-2">DN</div>
                                        <div>
                                            <div>Dewi Nuraeni, S.Kom</div>
                                            <small class="text-muted">dewi.nuraeni@faletehan.ac.id</small>
                                        </div>
                                    </div>
                                </td>
                                <td>0422077601</td>
                                <td>
                                    <span class="badge badge-fakultas fk">FK</span> Arsitek
                                </td>
                                <td><span class="active-dot active"></span> Aktif</td>
                                <td>3</td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 92%;"
                                            aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">92%</small>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-key me-2"></i>Reset Password</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item text-danger" href="#"><i
                                                        class="fas fa-user-slash me-2"></i>Nonaktifkan</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-2">RH</div>
                                        <div>
                                            <div>Rudi Hermawan, M.Sc</div>
                                            <small class="text-muted">rudi.hermawan@faletehan.ac.id</small>
                                        </div>
                                    </div>
                                </td>
                                <td>0418059101</td>
                                <td>
                                    <span class="badge badge-fakultas fe">FE</span> Teknik Sipil
                                </td>
                                <td><span class="active-dot active"></span> Aktif</td>
                                <td>2</td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">75%</small>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-key me-2"></i>Reset Password</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item text-danger" href="#"><i
                                                        class="fas fa-user-slash me-2"></i>Nonaktifkan</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-2">HA</div>
                                        <div>
                                            <div>Hendra Aditya, S.H., M.H.</div>
                                            <small class="text-muted">hendra.aditya@faletehan.ac.id</small>
                                        </div>
                                    </div>
                                </td>
                                <td>0412068701</td>
                                <td>
                                    <span class="badge badge-fakultas fh">FH</span> Teknik Elektro
                                </td>
                                <td><span class="active-dot inactive"></span> Nonaktif</td>
                                <td>0</td>
                                <td>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%;"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">0%</small>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fas fa-key me-2"></i>Reset Password</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item text-success" href="#"><i
                                                        class="fas fa-user-check me-2"></i>Aktifkan</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation" class="mt-4">
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

    <!-- Modal Tambah Dosen -->
    <div class="modal fade" id="addDosenModal" tabindex="-1" aria-labelledby="addDosenModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDosenModalLabel">Tambah Dosen Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="nama@faletehan.ac.id">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">NIDN</label>
                                <input type="text" class="form-control" placeholder="Contoh: 0410058801">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">No. Telepon</label>
                                <input type="text" class="form-control" placeholder="Contoh: 08123456789">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Fakultas</label>
                                <select class="form-select">
                                    <option selected disabled>Pilih Fakultas</option>
                                    <option value="ft">Fakultas Teknik</option>
                                    <option value="fk">Fakultas Kesehatan</option>
                                    <option value="fe">Fakultas Ekonomi</option>
                                    <option value="fh">Fakultas Hukum</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Program Studi</label>
                                <select class="form-select">
                                    <option selected disabled>Pilih Program Studi</option>
                                    <option value="ti">Teknik Informatika</option>
                                    <option value="si">Sistem Informasi</option>
                                    <option value="te">Teknik Elektro</option>
                                    <option value="tm">Teknik Mesin</option>
                                </select>
                            </div>
                        </div><?php /**PATH C:\laragon\www\absensidosen\resources\views/kelmatkul.blade.php ENDPATH**/ ?>