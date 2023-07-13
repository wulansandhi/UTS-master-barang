@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
                <div class="card border-0 shadow">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources/images/wulan.jpg') }}" alt="image">
                    <div class="card-body p-1-9 p-xl-5">
                        <div class="mb-4">
                            <h3 class="h4 mb-0">Wulan Permata Sandhi</h3>
                            <span class="text-dark">Information System Student</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><a href="#!"><i
                                        class="far fa-envelope display-25 me-3 text-dark"></i>wulansandhi@gmail.com</a>
                            </li>
                            <li class="mb-3"><a href="#!"><i
                                        class="fas fa-mobile-alt display-25 me-3 text-dark"></i>089529511756</a>
                            </li>
                            <li class="mb-3"><a href="https://www.linkedin.com/in/wulan-permata-sandhi-a82146239/"
                                    target="blank"><i class="fab fa-linkedin-in display-20 me-3 text-dark"></i>Wulan
                                    Permata Sandhi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ps-lg-1-6 ps-xl-5">
                    <div class="mb-5 wow fadeIn">
                        <div class="text-start mb-1-6 wow fadeIn">
                            <h2 class="h1 mb-0 text-dark">About Me</h2>
                        </div>
                        <p>Nama saya adalah Wulan Permata Sandhi. Saya lahir dan besar di Surabaya. Saya mahasiswa
                            Sistem informasi semester 6 dari Institut Teknologi Telkom Surabaya. Saya memiliki minat
                            yang besar dalam web developer dan machine learning. Saya selalu tertarik untuk mempelajari
                            hal-hal baru dan mengembangkan keterampilan saya dalam bidang tersebut.</p>
                        <p class="mb-0">Saya berharap dapat terus mengembangkan diri dan mencapai tujuan pribadi dan
                            profesional saya. Saya senang berinteraksi dengan orang baru dan belajar dari pengalaman
                            mereka. Saya yakin bahwa dengan komitmen, kerja keras, dan semangat yang kuat, saya dapat
                            mencapai kesuksesan dalam karier saya dan memberikan kontribusi yang berarti bagi perusahaan
                            atau institusi tempat saya bekerja.</p>
                    </div>
                    <div class="mb-5 wow fadeIn">
                        <div class="text-start mb-1-6 wow fadeIn">
                            <h2 class="mb-0 text-dark">Education</h2>
                        </div>
                        <div class="row mt-n4">
                            <div class="col-sm-6 col-xl-4 mt-4">
                                <div class="card text-center border-0 rounded-3">
                                    <div class="card-body">
                                        <i class="ti-medall-alt icon-box medium rounded-3 mb-4"></i>
                                        <h3 class="h5 mb-3">Bangkit Academy by Google, GoTo, Traveloka</h3>
                                        <p class="mb-0">2023-sekarang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 mt-4">
                                <div class="card text-center border-0 rounded-3">
                                    <div class="card-body">
                                        <i class="ti-medall-alt icon-box medium rounded-3 mb-4"></i>
                                        <h3 class="h5 mb-3">Institut Teknologi Telkom Surabaya</h3>
                                        <p class="mb-0">2020-sekarang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 mt-4">
                                <div class="card text-center border-0 rounded-3">
                                    <div class="card-body">
                                        <i class="ti-medall-alt icon-box medium rounded-3 mb-4"></i>
                                        <h3 class="h5 mb-3">SMA Negeri 15 Surabaya</h3>
                                        <p class="mb-0">2017-2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeIn">
                        <div class="text-start mb-1-6 wow fadeIn">
                            <h2 class="mb-0 text-dark">Skills</h2>
                        </div>
                        <div class="progress-style1">
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6 fw-bold">HTML</div>
                                    <div class="col-6 text-end">85%</div>
                                </div>
                            </div>
                            <div class="custom-progress progress rounded-3 mb-4">
                                <div class="animated custom-bar progress-bar bg-dark slideInLeft" style="width:85%"
                                    aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                            </div>
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6 fw-bold">Python</div>
                                    <div class="col-6 text-end">70%</div>
                                </div>
                            </div>
                            <div class="custom-progress progress rounded-3 mb-4">
                                <div class="animated custom-bar progress-bar bg-dark slideInLeft" style="width:70%"
                                    aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
