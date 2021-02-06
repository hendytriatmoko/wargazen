@extends('include.nav')
@section('title')
    INDEX
@endsection
@section('index')

        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">WARGAZEN</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Pusat Sistem Informasi Rukun Warga dan Tetangga.</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="{{route('login')}}">LOGIN</a>
                </div>
            </div>
        </header>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            
            <div class="container">
                <!-- Featured Project Row-->
                <center><h2 style="margin-top: -100px">ABOUT</h2></center>
                <br><br>
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7"><img style="padding-right: 10%" class="img-fluid mb-3 mb-lg-0" src="img/logo.png" alt="" /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>WARGAZEN</h4>
                            <p class="text-black-50 mb-0">
                                WARGAZEN adalah sebuah aplikasi berbasis website yang dibuat dengan 
                                tujuan untuk memudahkan para warga warga setempat dalam interaksi
                                maupun transaksi yang terjadi pada lingkup rukun warga dan rukun tetangga.
                            </p>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </section>

        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <h2 class="text-white mb-4" style="margin-top: -100px">FITUR</h2>
                    <div class="row col-lg-12 fitur" style="margin-top: 50px">
                        <div class="col-md-4 col-sm-4 col-xs-6 fitur-button">
                            <a class="btn btn-primary"  data-toggle="collapse" data-target="#online">
                                <div style="float:left; padding-right:5%">
                                    <span class="icon-globe icons"></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" align="center">Administrasi</h4>
                                </div>
                            </a>
                                <div id="online" class="collapse ket">
                                    Aplikasi Surat Menyurat RT dan RW. Dapat langsung diakses melalui Desktop (PC/Laptop) maupun smartphone. Dimulai dari warga yang mengajukan permintaan surat, selanjutnya di setujui oleh Ketua RT dan RW, dan dapat dicetak oleh warga.
                                </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6 fitur-button">
                            <a class="btn btn-primary" data-toggle="collapse" data-target="#level">
                                <div style="float:left; padding-right:5%">
                                    <span class="icon-user icons"></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" align="center">Data Warga</h4>
                                </div>
                            </a>
                                <div id="level" class="collapse ket">
                                    Data warga adalah informasi mengenai data data kepala keluarga dan warga tetap maupun kontrak.
                                </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6 fitur-button">
                            <a class="btn btn-primary" data-toggle="collapse" data-target="#aparat">
                                <div style="float:left; padding-right:5%">
                                    <span class="icon-organization icons"></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" align="center">Petisi</h4>
                                </div>
                            </a>
                                <div id="aparat" class="collapse ket">
                                    Petisi adalah sebuah fitur sebagai bentuk gerakan warga setempat terkait kesepakatan dan kekompakkan warga setempat akan suatu hal.
                                </div>
                        </div>
                        <div class="clearfix"></div>
                        <br><br><br><br><br>                      
                        <div class="col-md-4 col-sm-4 col-xs-6 fitur-button">
                            <a class="btn btn-primary" data-toggle="collapse" data-target="#lembaga">
                                <div style="float:left; padding-right:5%">
                                    <span class="icon-graduation icons"></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" align="center">Keluhan & Aspirasi</h4>
                                </div>
                            </a>
                                <div id="lembaga" class="collapse ket">
                                    Warga tempat tinggal setempat dapat melaporkan sebuah info baik keluhan maupun aspirasi yang akan ditindak lanjuti oleh rt ataupun rw.
                                </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6 fitur-button">
                            <a class="btn btn-primary" data-toggle="collapse" data-target="#warga">
                                <div style="float:left; padding-right:5%">
                                    <span class="icon-people icons"></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" align="center">Rapat & Notulensi</h4>
                                </div>
                            </a>
                                <div id="warga" class="collapse ket">
                                    Sebuah informasi mengenai rapat dan notulensinya dapat dilihat pada sistem ini.
                                </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6 fitur-button">
                            <a class="btn btn-primary" data-toggle="collapse" data-target="#kms">
                                <div style="float:left; padding-right:5%">
                                    <span class="icon-wallet icons"></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" align="center">Informasi & Pengumuman</h4>
                                </div>
                            </a>
                                <div id="kms" class="collapse ket">
                                    RT dan Rw dapat memberikan sebuah informasi maupun pengumuman apapun yang ingin disampaikan kepada masyarakat. dan masyarakat dapat menanggapi dengan menuliskan komentarnya.
                                </div>
                        </div>
                        <div class="clearfix"></div>
                        <br><br><br><br><br><br>
                        <div class="col-md-4 col-sm-4 col-xs-6 fitur-button">
                            <a class="btn btn-primary" data-toggle="collapse" data-target="#notulen">
                                <div style="float:left; padding-right:5%">
                                    <span class="icon-drawer icons"></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" align="center">Password Recovery</h4>
                                </div>
                            </a>
                                <div id="notulen" class="collapse ket">
                                    Bagi warga yang lupa password dapat merecovery password melalui sms gateway.
                                </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6 fitur-button">
                            <a class="btn btn-primary" data-toggle="collapse" data-target="#sosialisasi">
                                <div style="float:left; padding-right:5%">
                                    <span class="icon-microphone icons"></span>
                                </div>
                                <div class="media-body" align="center">
                                    <h4 class="media-heading" align="center">Digital Signature</h4>
                                </div>
                            </a>
                                <div id="sosialisasi" class="collapse ket">
                                    RT dan RW dapat menaruh tanda tangan digital yang tidak terpublik pada sistem dengan tujuan memudahkan memberikan tanda tangan hanya dengan persetujuan
                                </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6 fitur-button">
                            <a class="btn btn-primary" data-toggle="collapse" data-target="#inventaris">
                                <div style="float:left; padding-right:5%">
                                    <span class="icon-chemistry icons"></span>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" align="center">Struktur Organisasi</h4>
                                </div>
                            </a>
                                <div id="inventaris" class="collapse ket">
                                    Sebuah informasi terkait struktur organisasi RW dan RT tempat tinggal.
                                </div>
                        </div>
                        <div class="clearfix"></div>
                        <br><br><br><br><br><br>
                        <br><br><br>                    
                    </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="" />
            </div>
        </section>

        
        
@endsection