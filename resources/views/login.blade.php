<!DOCTYPE html>
<html>
<title>Login | Webnify</title>
<head>
    <!-- Import CSS -->
    <link rel="stylesheet" type="text/css" href="css/def.css">
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<main class="login-page">
    <section class="section-login">
        <h4 class="ubuntu-regular text-medium">Mulai dari sekarang</h4>
        <h1 class="quicksand-bold text-xxl spasing-small">Masuk dengan akun yang ada</h1>
        <h4 class="ubuntu-regular text-medium">Belum memiliki akun? <a href="{{route('register')}}">Sign Up</a></h4>
        <div class="form-login spasing-medium">
            <form class="row g-3 needs-validation" action="{{route('login-proses')}}" method="post" novalidate>
            @csrf
                <div class="col-md-12 spasing-small">
                    <label for="validationCustom01" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text" style="background-color: var(--bs-body-bg);"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="invalid-feedback">
                        Tolong masukkan email yang valid.
                    </div>
                </div>
                <div class="col-md-12 spasing-small">
                    <label for="validationCustom02" class="form-label">Password</label>
                    <input type="password" name="password" minlength="4" maxlength="16" class="form-control" id="validationCustom02" required>
                    <div class="invalid-feedback">
                        Tolong masukkan password.
                    </div>
                </div>
                @if($massage = Session::get('error'))
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>
                        {{$massage}}
                    </div>
                    </div>
                @endif
                <div class="col-12 spasing-medium">
                    <button class="btn btn-secondary rounded-50">Change method</button>
                    <button class="btn btn-primary rounded-50" type="submit">Masuk</button>
                </div>
            </form>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if($massage = Session::get('success'))
<script>
const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
Toast.fire({
  icon: "success",
  title: "{{$massage}}"
});
</script>
@endif

<!-- Import JavaScript -->
<script src="js/def.js"></script>
<script src="js/validation.js"></script>
<script src="js/theme.js"></script>
<script src="js/fontawesome.js"></script>
<!-- Import Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-9zX1z7q9z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z7z" crossorigin="anonymous"></script>
</body>
</html>
