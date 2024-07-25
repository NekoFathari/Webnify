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
<body>
@include('layout.navbar')

<main class="title-page">
    <h1 class="quicksand-bold text-xxl spasing-small">Selamat Datang {!! Auth::user()->name !!}!</h1>

</main>
<main class="dashboard-overview">
        <aside class="sec-1">
            <!--- Card 1 (Date, Jumlah User, Jumlah Content, dan Quick action buat Announcements) -->
            <div class="half">
                <aside class="widget">
                    <div class="card-widget-date">
                        <h4 class="quicksand-bold text-small" style="text-align: Center;">Tanggal</h4>
                        <h4 class="quicksand-bold text-day" style="text-align: Center;" id="tanggal"></h4>
                        <h4 class="quicksand-bold text-medium" style="text-align: Center;" id="hari"></h4>
                    </div>
                </aside>
                <aside class="widget">
                    <div class="card-widget">
                        <div class="icon-count">
                            <i class="fa-regular fa-users fa-xl"></i>
                        </div>
                        <div class="text-count">
                            <h4 class="quicksand-bold text-small" style="text-align: left;">User</h4>
                            <h4 class="quicksand-bold text-medium" style="text-align: left;">{!! DB::table('users')->count(q) !!}</h4>
                        </div>
                    </div>
                    <div class="card-widget">
                    <div class="icon-count">
                            <i class="fa-regular fa-newspaper fa-xl"></i>
                        </div>
                        <div class="text-count">
                            <h4 class="quicksand-bold text-small" style="text-align: left;">Content</h4>
                            <h4 class="quicksand-bold text-medium" style="text-align: left;">(jumlah)</h4>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="half-down">
                <h4 class="quicksand-bold text-large spasing-small" style="text-align: right;">Announcements</h4>
                <aside class="widget">
                    <div class="annoucements-widget">
                        <div class="half-side">
                            <br></br>
                            <button class="btn btn-primary rounded-50" type="submit">Buat Pengumuman</button>
                        </div>
                        <article class="text-container-widget">
                            <h4 class="quicksand-bold text-medium">Pengumuman 1</h4>
                            <h4 class="quicksand-bold text-small">Deskripsi Pengumuman 1</h4>
                        </article>
                        <article class="text-container-widget">
                            <h4 class="quicksand-bold text-medium">Pengumuman 1</h4>
                            <h4 class="quicksand-bold text-small">Deskripsi Pengumuman 1</h4>
                        </article>
                    </div>
                </aside>
            </div>
        </aside>
        <aside class="sec-2"> 
            <h4 class="quicksand-bold text-large spasing-small" style="text-align: right;">Current Task</h4>   
            <div class="s-card-widget">
                <div class="half-side">
                    <br></br>
                        <button class="btn btn-primary rounded-50" type="submit">Create</button>
                    </div>
                    <article class="text-container-widget">
                        <h4 class="quicksand-bold text-medium">Pengumuman 1</h4>
                        <h4 class="quicksand-bold text-small">Deskripsi Pengumuman 1</h4>
                    </article>
                    <article class="text-container-widget">
                        <h4 class="quicksand-bold text-medium">Pengumuman 1</h4>
                        <h4 class="quicksand-bold text-small">Deskripsi Pengumuman 1</h4>
                    </article>
                </div>
            </div>
        </aside>
        <aside class="sec-3">
            <h4 class="quicksand-bold text-large spasing-small" style="text-align: right;">Calendar</h4>
            <div class="s-card-widget">
                <div class="half-side">
                    <div class="button">
                        <a><i class="fa-regular fa-arrow-left"></i></a>
                        <a><i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                    <a>Test</a>
                </div>
                    <article class="text-container-widget">
                        <h4 class="quicksand-bold text-medium">Pengumuman 1</h4>
                        <h4 class="quicksand-bold text-small">Deskripsi Pengumuman 1</h4>
                        
                    </article>
                </div>
            </div>
        </aside>
    </aside>
</main>


<!-- Import JavaScript -->
<script src="js/def.js"></script>
<script src="js/validation.js"></script>
<script src="js/theme.js"></script>
<script src="js/fontawesome.js"></script>
<script src="js/date.js"></script>
<!-- Import Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>