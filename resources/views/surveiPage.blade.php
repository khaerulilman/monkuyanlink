@extends('layouts/main')

@section('container')

<body id="layout-1" data-luno="theme-blue">
    <!-- end main-content -->
    <div class="wrapper">
        <!-- Sign In version 1 -->
        <!-- start: page body -->
        <div class="page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
            <div class="container-fluid">
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-10 col-12 d-flex justify-content-center align-items-center text-center">
                        <div style="width: 100%;">
                            <div class="mb-2">
                                <h2 class="color-900">Survei Kepuasaan Masyarakat</h2>
                            </div>
                            <!-- List Checked -->
                            <ul class="list-unstyled mb-5">
                                <li class="mb-4">
                                    <h5 class="color-600 d-block">Formulir Pengisian Form Elektronik </h5>
                                </li>
                            </ul>
                            <div class="row mx-0 justify-content-center" style="grid-row-gap:1rem;">
                                <div class="col-lg-6 col-12">
                                    <a href="https://sinikemas.sumutprov.go.id/" target="_blank"
                                        style="color:#000;font-weight:300;">
                                        <div class="card card-hover-pegawai">
                                            <div class="card-body card-indeks-custom">
                                                <img src="https://emonkuyanlik.sumutprov.go.id/images/icons/check.svg"
                                                    alt="">
                                                <h6 class="mt-2 mb-4" style="text-decoration: underline;">Survei
                                                    Kepuasan Masyarakat</h6>
                                                <p>Formulir Penilaian Bagi Evaluator Kode A</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <a href="/formulir" style="color:#000;font-weight:300;">
                                        <div class="card card-hover-pegawai">
                                            <div class="card-body card-indeks-custom">
                                                <img src="https://emonkuyanlik.sumutprov.go.id/images/icons/check.svg"
                                                    alt="">
                                                <h6 class="mt-2 mb-4">F-03A</h6>
                                                <p>Formulir Penilaian Dari Masyarakat Kode A</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer px-xl-4 px-sm-2 px-2 py-lg-2 py-1" style="position: absolute;bottom:0;right:0;">
                        <div class="row justify-content-between">
                            <div class="col-3">©2022 E-MonkuYanlik</div>
                            <div class="col-5 text-end">Design & Develop By <a
                                    href="https://codinglab.id/">Codinglab.id</a> </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div>
    </div>
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
</body>


@endsection