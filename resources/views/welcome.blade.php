<!DOCTYPE html>
<html>
<title>Home | Webnify</title>
<head>
    <!-- Import CSS -->
    <link rel="stylesheet" type="text/css" href="css/def.css">
    <link rel="stylesheet" type="text/css" href="css/fwd.css">
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example">
@include('layout.navbar')

<main class="main-page">
    <h1 class="quicksand-bold text-xxl spasing-small">
    @if($getusername) 
        {!! 'Selamat datang '. $getusername . ',' !!}
    @endif</h1>
    <h1 class="quicksand-bold text-xxl spasing-small" id="time-output"></h1>
    <h4 class="ubuntu-regular text-medium spasing-medium">Apa yang ingin kamu lakukan hari ini?</h4>
    <section class="quick-action">
        <div class="q-card">
            <div class="aside">
                <i class="fa-regular fa-user-check text-xl" style="padding-right:20px;"></i>
                <h4 class="ubuntu-regular text-large">Verifikasi Akun</h4>
            </div>
            <i class="fa-solid fa-angle-right text-xl"></i>
        </div>
        <div class="q-card">
            <div class="aside">
                <i class="fa-regular fa-memo-circle-check text-xl" style="padding-right:20px;"></i>
                <h4 class="ubuntu-regular text-large">Daftar Seminar</h4>
            </div>
            <i class="fa-solid fa-angle-right text-xl"></i>
        </div>
        <div class="q-card">
            <div class="aside">
                <i class="fa-regular fa-down-to-bracket text-xl" style="padding-right:20px;"></i>
                <h4 class="ubuntu-regular text-large">Unduh Sertifikat</h4>
            </div>
            <i class="fa-solid fa-angle-right text-xl"></i>
        </div>
    </section>
</main>
<main class="feeds-widget-page main-page">
    <!-- Feeds -->

    <section class="feeds">
        <div class="title-section">
            <h1 class="quicksand-bold text-xl-c">Feed</h1>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle rounded-50" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #1B1B1B !important;border: none;padding: 10px;">
                    <i class="fa-regular fa-bars"></i> <a style="margin:0 10px;"> Filter</a> <span class="badge text-bg-secondary">4</span>
                </button>
                <ul class="dropdown-menu">
                    <li><button class="dropdown-item" type="button">Action</button></li>
                    <li><button class="dropdown-item" type="button">Another action</button></li>
                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                </ul>
            </div>
        </div>
        <div class="feeds-container">
            <div class="feeds-information">
                <img src="img/user.jpg" alt="User" class="rounded-circle" width="50" height="50">
                <div class="user-info">
                    <h4 class="ubuntu-regular text-medium">Nama User</h4>
                    <p class="ubuntu-regular text-small">Waktu</p>
                </div>
            </div>
            <div class="feeds-badge">
                <!-- Badgenya simpan sini --->
            </div>
            <article class="feeds-content">
                <h2 class="quicksand-bold text-xl">Judul Seminar</h2>
                <p class="ubuntu-regular text-small">Deskripsi Seminar</p>
                <div class="feeds-action">
                    <button class="btn btn-primary rounded-50">Daftar</button>
                </div>
            </article>
        </div>
        <div class="feeds-container">
            <div class="feeds-information">
                <img src="img/user.jpg" alt="User" class="rounded-circle" width="50" height="50">
                <div class="user-info">
                    <h4 class="ubuntu-regular text-medium">Nama User</h4>
                    <p class="ubuntu-regular text-small">Waktu</p>
                </div>
            </div>
            <div class="feeds-badge">
                <!-- Badgenya simpan sini --->
            </div>
            <article class="feeds-content">
                <h2 class="quicksand-bold text-xl">Judul Seminar</h2>
                <p class="ubuntu-regular text-small">Deskripsi Seminar</p>
                <div class="feeds-action">
                    <button class="btn btn-primary rounded-50">Daftar</button>
                </div>
            </article>
        </div>
        <div class="feeds-container">
            <div class="feeds-information">
                <img src="img/user.jpg" alt="User" class="rounded-circle" width="50" height="50">
                <div class="user-info">
                    <h4 class="ubuntu-regular text-medium">Nama User</h4>
                    <p class="ubuntu-regular text-small">Waktu</p>
                </div>
            </div>
            <div class="feeds-badge">
                <!-- Badgenya simpan sini --->
            </div>
            <article class="feeds-content">
                <h2 class="quicksand-bold text-xl">Judul Seminar</h2>
                <p class="ubuntu-regular text-small">Deskripsi Seminar</p>
                <div class="feeds-action">
                    <button class="btn btn-primary rounded-50">Daftar</button>
                </div>
            </article>
        </div>
        <div class="feeds-container">
            <div class="feeds-information">
                <img src="img/user.jpg" alt="User" class="rounded-circle" width="50" height="50">
                <div class="user-info">
                    <h4 class="ubuntu-regular text-medium">Nama User</h4>
                    <p class="ubuntu-regular text-small">Waktu</p>
                </div>
            </div>
            <div class="feeds-badge">
                <!-- Badgenya simpan sini --->
            </div>
            <article class="feeds-content">
                <h2 class="quicksand-bold text-xl">Judul Seminar</h2>
                <p class="ubuntu-regular text-small">Deskripsi Seminar</p>
                <div class="feeds-action">
                    <button class="btn btn-primary rounded-50">Daftar</button>
                </div>
            </article>
        </div>
        <div class="feeds-container">
            <div class="feeds-information">
                <img src="img/user.jpg" alt="User" class="rounded-circle" width="50" height="50">
                <div class="user-info">
                    <h4 class="ubuntu-regular text-medium">Nama User</h4>
                    <p class="ubuntu-regular text-small">Waktu</p>
                </div>
            </div>
            <div class="feeds-badge">
                <!-- Badgenya simpan sini --->
            </div>
            <article class="feeds-content">
                <h2 class="quicksand-bold text-xl">Judul Seminar</h2>
                <p class="ubuntu-regular text-small">Deskripsi Seminar</p>
                <div class="feeds-action">
                    <button class="btn btn-primary rounded-50">Daftar</button>
                </div>
            </article>
        </div>
        <div class="feeds-container">
            <div class="feeds-information">
                <img src="img/user.jpg" alt="User" class="rounded-circle" width="50" height="50">
                <div class="user-info">
                    <h4 class="ubuntu-regular text-medium">Nama User</h4>
                    <p class="ubuntu-regular text-small">Waktu</p>
                </div>
            </div>
            <div class="feeds-badge">
                <!-- Badgenya simpan sini --->
            </div>
            <article class="feeds-content">
                <h2 class="quicksand-bold text-xl">Judul Seminar</h2>
                <p class="ubuntu-regular text-small">Deskripsi Seminar</p>
                <div class="feeds-action">
                    <button class="btn btn-primary rounded-50">Daftar</button>
                </div>
            </article>
        </div>
    </section>

    <!-- Aside Widget -->
    <aside class="widget">
        <article class="widget-container">
            <h1 class="ubuntu-regular text-xl spasing-small">Tentang Webnify</h1>
            <p class="ubuntu-regular text-xsmall">Webnify adalah platform yang didukung oleh IGI Jawa Timur untuk memudahkan kamu dalam mengelola seminar, workshop, dan kegiatan lainnya. Dengan Webnify, kamu bisa membuat, mengelola, dan mengikuti kegiatan yang kamu inginkan.</p>
        </article>
        <h1 class="ubuntu-regular text-xl spasing-small">Kalender</h1>
        <article class="widget-container">

        </article>
        
    </aside>
</main>


<!-- Import JavaScript -->
<script src="js/def.js"></script>
<script src="js/validation.js"></script>
<script src="js/theme.js"></script>
<script src="js/fontawesome.js"></script>
<script src="js/time.js"></script>


<!-- Import Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>