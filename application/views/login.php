<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.0.0-alpha.1
* @link https://coreui.io
* Copyright (c) 2019 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <title>DMS</title>
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Main styles for this application-->
  <link href="<?php echo site_url('dist/css/style.css') ?>" rel="stylesheet">
  <link href="<?php echo site_url('dist/css/pace.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo site_url('plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Global site tag (gtag.js) - Google Analytics-->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    // Shared ID
    gtag('config', 'UA-118965717-3');
    // Bootstrap ID
    gtag('config', 'UA-118965717-5');
  </script>
</head>

<body class="c-app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">
              <h1>Login</h1>
              <p class="text-muted">PDAM Tirta Pakuan Kota Bogor</p>
              <form action="<?php echo site_url('login/aksi_login') ?>" method="post">
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <i class="nav-icon fas fa-user"></i></span></div>
                  <input class="form-control" type="text" placeholder="Username" name="username">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend"><span class="input-group-text">
                    <i class="nav-icon fas fa-key"></i></span></div>
                  <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">Login</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card text-white bg-default py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <p><img src="<?php echo site_url('dist/img/LogoPDAM.png') ?>" alt="" height="175px" width="150px"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CoreUI and necessary plugins-->
  <script src="vendors/pace-progress/js/pace.min.js"></script>
  <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>

</body>

</html>