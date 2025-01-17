<!DOCTYPE html>
<html lang="en">

<style>
.client_section {
    padding: 50px 0;
    background-color: #f7f7f7;
    color: #333;
}

.heading_container {
    text-align: center;
    margin-bottom: 40px;
}

.heading_container h2 {
    font-size: 32px;
    margin-bottom: 10px;
}

.testimonial-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 20px;
}

.card {
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-content {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 20px;
    padding: 20px;
}

.img-box {
    display: flex;
    align-items: center;
    justify-content: center;
}

.img-box img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.text-content {
    text-align: left;
}

.text-content h6 {
    font-size: 18px;
    margin-bottom: 5px;
    font-weight: 600;
}

.location {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

.testimonial-text {
    font-size: 14px;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .card-content {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .img-box {
        justify-content: center;
        margin-bottom: 15px;
    }
}

.custom-navbar {
        background-color:rgb(80, 136, 255); /* Warna latar belakang custom */
    }

.text-outline {
        color: white; /* Warna teks utama */
        text-shadow: 
            -1px -1px 0 #000, /* Outline hitam di kiri atas */
             1px -1px 0 #000, /* Outline hitam di kanan atas */
            -1px  1px 0 #000, /* Outline hitam di kiri bawah */
             1px  1px 0 #000; /* Outline hitam di kanan bawah */
    }

</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Udinus Poliklinik</title>



</nav>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav class="navbar bg-body-tertiary custom-navbar" >
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 text-outline" style="color: white;" >UDINUS KLINIK CENTER</span>
  </div>
</nav>

<div class="container-fluid flex flex-col justify-center items-center text-white p-5 text-outline"
     style="height: 400px; background-image: url('assets/images/gedung1.png'); background-size: cover; background-position: center; position: relative;">
     <h1 class="font-weight-bold mb-3" style="color: white;">Udinus Klinik Center</h1>
     <h5 style="color: white; font-weight: bold;">
    Website Layanan Kesehatan
</h5>
    
</div>
    <div class="container mt-5">
        <div class="row justify-content-lg-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-hospital-user fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3 class="">Pasien</h3>
                        <p class="card-text">Untuk memulai layanan kesehatan di Udinus Klinik Center, silahkan login</p>
                        <a href="loginUser.php" class="btn btn-primary btn-block">LOGIN</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-stethoscope fa-fw mb-3 text-success" style="font-size: 34px;"></i>
                        <h3 class="">Dokter</h3>
                        <p class="card-text">Untuk memulai melayani pasien di Udinus Klinik Center, silahkan login </p>
                        <div class="d-grid">
                            <a href="login.php" class="btn btn-success btn-block">LOGIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login-box -->
        <section class="client_section layout_padding">
    



        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>