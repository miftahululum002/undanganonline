@extends('layouts.front')
@section('style')
@endSection
@section('content')
<section class="fdb-block cover d-flex align-items-center">
    <div class="container align-items-end justify-content-center d-flex">
        <div class="row align-items-top text-left">
            <div class="col-12 col-md-6 col-lg-6">
                <h1 class="judul"><?= APP_NAME ?></h1>
                <p class="lead subjudul">Undangan pernikahan lebih hemat, praktis, dan kekinian dengan url undangan yang disebar otomatis untuk memberikan kesan terbaik.</p>
                <p class="mt-4"><a href="#/order" class="btn btn-light btn-pesan">Buat Undangan</a></p>
                <p class="mt-4"><a href="#/tema" class="btn btn-light btn-pesan">Lihat Demo</a></p>
            </div>
            <div class="col-12 col-sm-4 col-md-6 col-lg-4 m-auto">
                <img alt="image" class="img-fluid rounded-0" src="{{asset('img')}}/favicon.png?<?= date("Y-m-d"); ?>">
            </div>
        </div>
    </div>
</section>
<section class="fdb-block" id="fitur">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1>Fitur</h1>
            </div>
        </div>
        <div class="row text-left mt-5">
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-3">
                        <img alt="image" class="fdb-icon" src="{{asset('img')}}/icons/gift.svg">
                    </div>
                    <div class="col-9">
                        <h3><b>Website Selalu Aktif</b></h3>
                        <p>Website yang cepat dan aman akan aktif tanpa ada batasan waktu.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
                <div class="row">
                    <div class="col-3">
                        <img alt="image" class="fdb-icon" src="{{asset('img')}}/icons/cloud.svg">
                    </div>
                    <div class="col-9">
                        <h3><b>Ubah Tampilan</b></h3>
                        <p>Desain web dan undangan dapat kamu ubah sesuka hati sesuai keinginan.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
                <div class="row">
                    <div class="col-3">
                        <img alt="image" class="fdb-icon" src="{{asset('img')}}/icons/map-pin.svg">
                    </div>
                    <div class="col-9">
                        <h3><b>Do'a dan Ucapan</b></h3>
                        <p>Para tamu dapat memberikan doa dan ucapan langsung di profile website undanganmu.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-left pt-3 pt-sm-4 pt-md-5">
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-3">
                        <img alt="image" class="fdb-icon" src="{{asset('img')}}/icons/layers.svg">
                    </div>
                    <div class="col-9">
                        <h3><b>Cerita</b></h3>
                        <p>Tuangkan cerita perjalanan cinta anda kepada tamu undangan.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
                <div class="row">
                    <div class="col-3">
                        <img alt="image" class="fdb-icon" src="{{asset('img')}}/icons/life-buoy.svg">
                    </div>
                    <div class="col-9">
                        <h3><b>Layar Sapa</b></h3>
                        <p>Setiap tamu yang hadir dapat disapa saat menerima undangan.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
                <div class="row">
                    <div class="col-3">
                        <img alt="image" class="fdb-icon" src="{{asset('img')}}/icons/layout.svg">
                    </div>
                    <div class="col-9">
                        <h3><b>Kirim Undangan</b></h3>
                        <p>Kamu bisa menggunakan WhatsApp untuk mengirimkan undangan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fdb-block" style="background-image: linear-gradient(to right, #005CAA 0%, #00c6f9 100%) !important" id="harga">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2 class="text-white">HARGA</h2>
            </div>
        </div>
        <div class="row mt-5 align-items-center">
            <div class="col-12 col-md-6 col-lg-6">
                <h2 class="judul">Harga Termurah!</h2>
                <p class="lead subjudul">Dengan harga terjangkau anda sudah mendapatkan halaman website, manajemen tamu, cerita, komentar, peta lokasi, dan buku tamu digital!.</p>
            </div>

            <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0">
                <div class="fdb-box px-4 pt-5">
                    <h2>Premium</h2>
                    <p class="lead">Harga spesial selama masa pandemi.</p>

                    <p class="h1 mt-5 mb-5">Rp 100.000</p>

                    <p><a href="#/tema" class="btn btn-primary">Pesan Sekarang</a></p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="fdb-block team-1" id="tema">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-12">
                <h2>Tema</h2>
                <p class="lead">Tersedia banyak pilihan tema undangan yang menarik untuk pernikahanmu..</p>
            </div>
        </div>

        <div class="row">
            <?php
            $i = 1;
            foreach ($themes as $row) : ?>
                <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
                    <div class="fdb-box p-0">
                        <img alt="image" class="img-fluid rounded-0" src="{{asset('themes')}}/{{$row->nama_theme}}/preview.png">
                        <div class="content p-2 d-flex justify-content-center">
                            <h3><b><?= $row->nama_theme ?></b></h3>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="mt-2 mr-2"><a href="{{route('order.index',$row->kode_theme)}}" class="btn btn-success btn-sm">Pesan</a></p>
                            <p class="mt-2"><a href="{{route('demo.index',$row->nama_theme)}}" class="btn btn-primary btn-sm">Demo</a></p>
                        </div>
                    </div>
                </div>
            <?php
                if ($i++ == 4) break;
            endforeach;
            ?>
        </div>

        <div class="d-flex justify-content-center">
            <p class="mt-4"><a href="{{route('themes.index')}}" class="btn btn-primary">Lihat Semua</a></p>
        </div>

    </div>
</section>
<section class="fdb-block" id="testi">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2>Testimonials</h2>
                <p class="lead">A small river named Duden flows by their place and supplies it with the necessary regelialia. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
            </div>
        </div>

        <div class="row mt-5 align-items-center justify-content-center">
            <div class="col-md-8 col-lg-4">
                <div class="fdb-box">
                    <div class="row no-gutters align-items-center">
                        <div class="col-3">
                            <img alt="image" class="img-fluid rounded" src="{{asset('img')}}/people/1.jpg">
                        </div>
                        <div class="col-8 ml-auto">
                            <p>
                                <strong>MC Project</strong><br>
                                <em>Co-founder at Company</em>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <p class="lead">
                                "Even the all-powerful Pointing has no control about the blind texts it is an small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar."
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-4 mt-4 mt-lg-0">
                <div class="fdb-box">
                    <div class="row no-gutters align-items-center">
                        <div class="col-3">
                            <img alt="image" class="img-fluid rounded" src="{{asset('img')}}/people/3.jpg">
                        </div>
                        <div class="col-8 ml-auto">
                            <p>
                                <strong>MC Project</strong><br>
                                <em>Co-founder at Company</em>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <p class="lead">
                                "Far far away, behind the word mountains, far from the countries Vokalia. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-4 mt-4 mt-lg-0">
                <div class="fdb-box">
                    <div class="row no-gutters align-items-center">
                        <div class="col-3">
                            <img alt="image" class="img-fluid rounded" src="{{asset('img')}}/people/2.jpg">
                        </div>
                        <div class="col-8 ml-auto">
                            <p>
                                <strong>MC Project</strong><br>
                                <em>Co-founder at Company</em>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <p class="lead">
                                "Separated they live in Bookmarksgrove right at the coast of the Semantics, the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endSection
@section('script')
@endSection