@extends('layouts/main')

@section('container')
<!-- Start Preloader Area -->
<body>
    <div class="main-content">
      <div class="container mb-5">
        <div class="row justify-content-center text-center text-dark">
          <div class="col-xl-7 col-lg-10 col-12">
            <img src="https://emonkuyanlik.sumutprov.go.id/images/logo/logo.svg" alt="">
            <h2 class="mb-5 mt-4">E-MONITORING KUALITAS PELAYANAN PUBLIK</h2>
          </div>
        </div>
        <div class="row row-cols-md-3 g-4">
          <div class="col">
            <div class="card text-center h-100">
              <div class="card-body">
                <div class="p-4">
                  <img src="https://emonkuyanlik.sumutprov.go.id/images/landing/survey_masyarakat.svg" alt="img"
                    width="220px" height="160px">
                  <h6 class="mt-4">SURVEI KEPUASAN MASYARAKAT</h6>
                </div>
                <div class="form-group mb-3 px-4 d-grid gap-2">
                  <a href="/surveiPage" class="btn btn-warning btn-block btn-masuk">Survei
                    Sekarang</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center h-100">
              <div class="card-body">
                <div class="p-4">
                  <img src="https://emonkuyanlik.sumutprov.go.id/images/landing/indeks.svg" alt="img" width="220px"
                    height="160px">
                  <h6 class="mt-4">INDEKS PELAYANAN PUBLIK</h6>
                </div>
                <div class="form-group mb-3 px-4 d-grid gap-2">
                  <a href="/login" class="btn btn-warning btn-block btn-masuk">Lanjutkan</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center h-100">
              <div class="card-body">
                <div class="p-4">
                  <img src="https://emonkuyanlik.sumutprov.go.id/images/landing/inovasi.svg" alt="img" width="220px"
                    height="160px">
                  <h6 class="mt-4">INOVASI PELAYANAN PUBLIK</h6>
                </div>
                <div class="form-group mb-3 px-4 d-grid gap-2">
                  <a href="/login" class="btn btn-warning btn-block btn-masuk">Lihat Inovasi</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <footer id="footer mx-3">

      <div class="container d-flex justify-content-between align-items-center">
        <div class="">
          <p class=" mb-0 text-muted">© 2024 E-MonkuYanlik</p>

        </div>
        <div class="">
          Design & Develop by <a href="https://codinglab.id/" class="animated_link" target="_blank">Codinglab.id</a>
        </div>

      </div>
    </footer>
    <!-- /footer --> <!-- </div> -->

    <!-- Start Go Top Area -->
    <div class="go-top">
      <i class='bx bx-chevron-up'></i>
    </div>
    <!-- End Go Top Area -->
  </div>

  <script src="https://emonkuyanlik.sumutprov.go.id/js/jquery.min.js?v=1670558969"></script>
  <script src="https://emonkuyanlik.sumutprov.go.id/js/jquery.textfill.min.js?v=1670558969"></script>
  <script src="https://emonkuyanlik.sumutprov.go.id/assets/6b3bf75/yii.js?v=1671853827"></script>
  <script src="https://emonkuyanlik.sumutprov.go.id/js/theme.js?v=1670568591"></script>
  <script src="https://emonkuyanlik.sumutprov.go.id/js/plugins.js?v=1670568591"></script>
  <script src="https://emonkuyanlik.sumutprov.go.id/js/background.js?v=1670568591"></script>
 
  </body>
 @endsection
 
 