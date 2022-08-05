<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Siloe | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("/theme/adminlte/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset("/theme/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("/theme/adminlte/dist/css/adminlte.min.css")}}">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Clinique </b>SILOE</a>
  </div>

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ouvrer une session de travail</p>

      <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="input-group mb-3">
          <input name="email" id="email" type="email" class="form-control" placeholder="Non d'Utilisateur" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input name="password" id="password" type="password" class="form-control" placeholder="Mot de Passe">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <!-- /.col -->
        <div class="col-12">
            <button type="submit" class="btn btn-block btn-light btn-flat">Ouvrez</button>
        </div>
        <!-- /.col -->
        <div class="col-12 pt-4">
            <a href="/">Retour à l'accueil</a>
        </div>

        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset("/theme/adminlte/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("/theme/adminlte/plugins/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("/theme/adminlte/plugins/dist/js/adminlte.min.js")}}"></script>
</body>
</html>
