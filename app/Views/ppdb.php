<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Online SMA Klaten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon"
        href="https://upload.wikimedia.org/wikipedia/commons/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg"
        type="image/x-icon">
    <script src="https://kit.fontawesome.com/82d0e7f3eb.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f4f6;
            color: #333;
        }

        .navbar {
            background-color: #3949ab;
        }

        .card {
            background-color: #fff;
        }

        .navbar-brand,
        .card-title {
            font-weight: 700;
        }

        .form-label {
            font-weight: 600;
        }

        .card-body {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
        }

        .form-control {
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 8px;
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .btn-primary {
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg"
                        alt="Logo" width="40" class="d-inline-block align-text-top">
                </a>
                <a class="navbar-brand" href="#">
                    PPDB Online SMA Klaten
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pengumuman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="btn btn-primary">
                                <i class="fas fa-user me-2"></i>Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container py-4">
            <h1 class="display-6 text-center mb-4">Pendaftaran Tahun Ajaran 2023/2024</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h5 class="card-title pt-2 text-center">Pendaftaran</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="text" class="form-control" id="nisn" placeholder="NISN" aria-describedby="NISN">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama-lengkap" placeholder="Nama Lengkap" aria-describedby="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nama-panggilan" class="form-label">Nama Panggilan</label>
                                            <input type="text" class="form-control" id="nama-panggilan" placeholder="Nama Panggilan" aria-describedby="Nama Panggilan">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat-lahir" placeholder="Tempat Lahir" aria-describedby="Tempat Lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal-lahir" placeholder="Tanggal Lahir" aria-describedby="Tanggal Lahir">
                                </div>
                                <button type="submit" class="btn btn-primary d-block w-100">
                                    <i class="fas fa-save me-2"></i>Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Ji6a5z5L+nvEZx4s2AbFanhLJxCmY7ewGB2MQwC5VFaH1Y+6b3FgJW9DaPjIwlgJ" crossorigin="anonymous"></script>
</body>

</html>
