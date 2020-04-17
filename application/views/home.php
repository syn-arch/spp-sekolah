<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<body>

  <nabvar class="navbar navbar-expand-lg bg-primary navbar-dark">
    <a href="" class="navbar-brand">BBC E-SPP</a>
    <div class="ml-auto">
      <a href="<?php echo base_url('auth/') ?>" class="btn btn-outline-light">Login Petugas</a>
      <a href="<?php echo base_url('login_siswa') ?>" class="btn btn-outline-light">Login Siswa</a>
    </div>
  </nabvar>

  <div class="jumbotron text-center">
    <div class="container">
      <h1>SELAMAT DATANG DI APLIKASI BBC SPP</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic accusantium tempora sit odit, dolore, tenetur totam expedita voluptatum earum deserunt nisi atque eaque nesciunt adipisci. Asperiores voluptate consectetur, iure, quidem possimus quis eligendi rem quaerat doloribus distinctio nesciunt ullam earum quia impedit voluptatum necessitatibus assumenda ipsam placeat veritatis facere vitae.</p>
    </div>
  </div>

  <div class="container">
    <h2 class="text-center">KELEBIHAN APLIKASI SPP</h2>
    <div class="row mt-4">
     <div class="col-md-4">
      <div class="card shadow">
        <div class="card-header">
          <h4 class="card-title text-center">RESPONSIVE</h4>
        </div>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus enim voluptatum dicta, error reprehenderit molestias numquam rerum modi quaerat doloremque esse. Tempora repudiandae nulla aliquam harum ipsam consectetur earum dolores.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-header">
          <h4 class="card-title text-center">AKSES 24 JAM</h4>
        </div>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus enim voluptatum dicta, error reprehenderit molestias numquam rerum modi quaerat doloremque esse. Tempora repudiandae nulla aliquam harum ipsam consectetur earum dolores.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-header">
          <h4 class="card-title text-center">KEMUDAHAN</h4>
        </div>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus enim voluptatum dicta, error reprehenderit molestias numquam rerum modi quaerat doloremque esse. Tempora repudiandae nulla aliquam harum ipsam consectetur earum dolores.</p>
        </div>
      </div>
    </div>
    </div>
  </div>
  
  <!-- Kontak Kami -->
  <div class="container mt-5">
    <h2 class="text-center">KONTAK KAMI</h2>
    <div class="row mt-4">
      <div class="col-md-4">
        <h4>SMK BUDI BAKTI CIWIDEY</h4>
        <h6>Jl.Babakan Tiga No.82</h6>
        <h6>Kec.Ciwidey Kab.Bandung</h6>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukan nama anda">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="text" class="form-control" name="email" placeholder="Masukan email anda">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <textarea name="" placeholder="Pesan" id="" cols="30" rows="10" class="form-control"></textarea>
            <div class="form-group mt-3">
              <button type="submit" class="btn btn-primary btn-block">Kirim</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="footer bg-dark">
  <p class="text-center mb-0 p-4 text-light">&copy; <?php echo date('Y') ?> copyright by Adiatna Sukmana</p>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>