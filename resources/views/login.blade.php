<!DOCTYPE html>
<html lang="id" class="h-100">


<!-- Mirrored from emonkuyanlik.sumutprov.go.id/site/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 02:34:47 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link rel="icon" type="image/png" href="https://emonkuyanlik.sumutprov.go.id/images/logo/logo_icon.ico">
  <meta name="csrf-param" content="_csrf">
  <meta name="csrf-token"
    content="4ZMdKOu7iEwtbl3ShsQxQMVcP-OgtFBfcUAE6POaIkGZoilnmY_jIUIKLIjOg1ISlCpbvPPiMgVFMWmAx8oaFA==">

  <link href="../css/bootstrap.mincf3c.css?v=1670558969" rel="stylesheet">
  <link type="text/css"
    href="http://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
  <link href="../admin/temp_assets/fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link href="../css/mystyle_landingc677.css?v=1671852700" rel="stylesheet">
  <link href="../css/luno-style7f26.css?v=1670568591" rel="stylesheet">
  <link href="../css/swiper.min7f26.css?v=1670568591" rel="stylesheet">
  <link href="../css/background7f26.css?v=1670568591" rel="stylesheet">
  <link href="../form_assets/css/custom48bd.css?v=1672209157" rel="stylesheet">
</head>

<body id="layout-1" data-luno="theme-blue">
  <!-- end main-content -->
  <div class="wrapper">
    <!-- Sign In version 1 -->
    <!-- start: page body -->
    <div class="page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
      <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-6 col-12 d-none d-lg-flex justify-content-center align-items-center">
            <div style="max-width: 35rem;">
              <div class="mb-4">
                <img src="https://emonkuyanlik.sumutprov.go.id/images/logo/logo_login.svg" alt="">
              </div>
              <div class="mb-5">
                <h2 class="color-900">E-MONITORING KUALITAS PELAYANAN PUBLIK</h2>
              </div>
              <!-- List Checked -->
              <ul class="list-unstyled mb-5">
                <li class="mb-4">
                  <span class="color-600 d-block"><strong>E-MonkuYanlik</strong> Versi 1.0.0</span>
                  <span class="color-600">Aplikasi Monitoring Kualitas Pelayanan Publik Elektronik</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
            <div class="card card-login-pegawai shadow-sm w-100 p-4 p-md-5" style="max-width: 32rem;height:100vh">
              <div class="container-form m-auto">
                <div class="title-login text-center mb-4">
                  <h2>SELAMAT DATANG</h2>
                  <h6>DI HALAMAN LOGIN PEGAWAI</h6>
                </div>
                <form id="login-form" action="https://emonkuyanlik.sumutprov.go.id/site/login" method="post">
                  <input type="hidden" name="_csrf"
                    value="4ZMdKOu7iEwtbl3ShsQxQMVcP-OgtFBfcUAE6POaIkGZoilnmY_jIUIKLIjOg1ISlCpbvPPiMgVFMWmAx8oaFA==">
                  <div class="mb-4">
                    <div class="form-group field-loginform-username required">
                      <label for="loginform-username">Nama Pengguna</label>
                      <input type="text" id="loginform-username" class="form-control" name="LoginForm[username]"
                        autofocus placeholder="Isi Nama Pengguna" aria-required="true">

                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                  <div class="mb-4">
                    <div class="form-group field-loginform-password required">
                      <label for="loginform-password">Kata Sandi</label>
                      <input type="password" id="loginform-password" class="form-control" name="LoginForm[password]"
                        value="" placeholder="Isi Kata Sandi" aria-required="true">

                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                  <div class="form-group field-loginform-rememberme">
                    <div class="custom-control custom-checkbox">
                      <input type="hidden" name="LoginForm[rememberMe]" value="0"><input type="checkbox"
                        id="loginform-rememberme" class="custom-control-input" name="LoginForm[rememberMe]" value="1"
                        checked>
                      <label class="custom-control-label" for="loginform-rememberme">Ingat Saya</label>
                      <div class="invalid-feedback"></div>

                    </div>
                  </div>
                  <div class="form-group mt-4 d-grid" style="grid-auto-flow: column;grid-column-gap:0.5rem;">
                    <button type="submit" class="default-btn btn-padding btn-login-pegawai"
                      name="login-button">Masuk</button> <a
                      class="default-btn btn-padding btn-kembali-pegawai text-center" name="login-button"
                      href="/">Kembali</a>
                  </div>

                  <div style="color:#999;margin:1em 0">
                    Jika Anda lupa kata sandi Anda, Anda dapat <a href="request-password-reset">mengatur ulang</a>.
                    <br>
                    <!-- Need new verification email?  -->
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div> <!-- End Row -->
      </div>
    </div>
  </div>

  <!-- </div> -->
  <script src="https://emonkuyanlik.sumutprov.go.id/js/jquery.min.js?v=1670558969"></script>
  <script src="https://emonkuyanlik.sumutprov.go.id/assets/6b3bf75/yii.js?v=1671853827"></script>
  <script src="https://emonkuyanlik.sumutprov.go.id/assets/6b3bf75/yii.validation.js?v=1671853827"></script>
  <script src="https://emonkuyanlik.sumutprov.go.id/assets/6b3bf75/yii.activeForm.js?v=1671853827"></script>
  <script src="https://emonkuyanlik.sumutprov.go.id/js/theme.js?v=1670568591"></script>
  <script src="https://emonkuyanlik.sumutprov.go.id/js/plugins.js?v=1670568591"></script>
  <script>jQuery(function ($) {
      jQuery('#login-form').yiiActiveForm([{ "id": "loginform-username", "name": "username", "container": ".field-loginform-username", "input": "#loginform-username", "error": ".invalid-feedback", "validate": function (attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Username tidak boleh kosong." }); } }, { "id": "loginform-password", "name": "password", "container": ".field-loginform-password", "input": "#loginform-password", "error": ".invalid-feedback", "validate": function (attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Password tidak boleh kosong." }); } }, { "id": "loginform-rememberme", "name": "rememberMe", "container": ".field-loginform-rememberme", "input": "#loginform-rememberme", "error": ".invalid-feedback", "validate": function (attribute, value, messages, deferred, $form) { yii.validation.boolean(value, messages, { "trueValue": "1", "falseValue": "0", "message": "Remember Me harus berupa \u00221\u0022 atau \u00220\u0022.", "skipOnEmpty": 1 }); } }], { "errorSummary": ".alert.alert-danger", "errorCssClass": "is-invalid", "successCssClass": "is-valid", "validationStateOn": "input" });
    });</script>
</body>


<!-- Mirrored from emonkuyanlik.sumutprov.go.id/site/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 02:36:52 GMT -->

</html>