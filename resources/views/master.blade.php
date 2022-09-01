<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bloodcare | {{ $route }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>

    <header>

        <!-- Navigation Bar -->
        <nav class="navbar shadow mb-5 fixed-top navbar-expand-lg navbar-light" style="padding: 0; background-color: #f1f3f2;">
            <a href="#" class="navbar-brand" style="font-size: 33px; font-weight: bold;">
                <img style="vertical-align: -50%;" src="{{ asset('img/bloodcare.jpg') }}" width="80" height="80" class="d-inline-block">
                Bloodcare
            </a>
            <button class="mr-3 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <script>
                $(document).ready(function() {
                    $(".nav-item").hover(function() {
                        $(this).toggleClass("active active-nav");
                        $("#act").toggleClass("active active-nav");
                    });
                });
            </script>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav" style="margin-left: 50px; position: relative; top: 22px;">
                    <li class="{{ Request::path() == 'home' ? 'active active-nav' : '' }} nav-item" id="{{ Request::path() == 'home' ? 'act' : '' }}">
                        <a class="nav-link" href="/home">HOME</a>
                    </li>
                    <li class="{{ Request::path() == 'artikel' ? 'active active-nav' : '' }} nav-item" id="{{ Request::path() == 'artikel' ? 'act' : '' }}">
                        <a class="nav-link" href="/artikel">ARTIKEL</a>
                    </li>
                    <li class="{{ Request::path() == 'permohonan' ? 'active active-nav' : '' }} nav-item" id="{{ Request::path() == 'permohonan' ? 'act' : '' }}" style="width: 160px">
                        <a class="nav-link" href="/permohonan">PERMOHONAN</a>
                    </li>
                    <li class="{{ Request::path() == 'events' ? 'active active-nav' : '' }} nav-item" id="{{ Request::path() == 'events' ? 'act' : '' }}">
                        <a class="nav-link" href="/events">ACARA</a>
                    </li>
                    <li class="{{ Request::path() == 'faq' ? 'active active-nav' : '' }} nav-item" id="{{ Request::path() == 'faq' ? 'act' : '' }}">
                        <a class="nav-link" href="/faq">FAQ</a>
                    </li>
                    <li class="{{ Request::path() == 'tentang' ? 'active active-nav' : '' }} nav-item" id="{{ Request::path() == 'tentang' ? 'act' : '' }}">
                        <a class="nav-link" href="/tentang">TENTANG</a>
                    </li>
                </ul>

                {{-- Login & Sign Up Button --}}
                @auth
                    <div class="ml-auto">
                        <ul class="navbar-nav">

                            @if (session('login') == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="/dashboard">ADMIN</a>
                                </li>
                            @endif

                            <li class="nav-item mr-2">
                                <a class="nav-link" href="/logout">LOGOUT</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="ml-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/signup">DAFTAR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login">MASUK</a>
                            </li>
                        </ul>
                    </div>
                @endauth

            </div>


        </nav>
    </header>

    <br>
    <br>
    <br>
    <br>
    <br>

    @if (session()->has('success'))
        <div class="alert alert-success al-success alert-dismissible">
            {{ session()->get('success') }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
    @endif

    {{-- Floating Scroll to Top Button --}}
    <button type="button" class="btn btn-danger btn-floating btn-lg rounded-circle" id="btn-back-to-top">
        ↑
    </button>

    @yield('konten')

    <br>
    <br>
    <br>

    <footer style="background-color: #262b30; color: white;">

        <!-- Footer Links -->
        <div class="container-lg text-center text-md-left pt-5">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 pl-4 mx-auto">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mt-2 mb-4" style="font-size: 35px;">BLOODCARE</h5>
                    <p style="color: #ababab">
                        Bloodcare membantu menghubungkan orang yang dapat mendonorkan darahnya dan
                        sesuai dengan kebutuhan pasien yang membutuhkan transfusi darah.
                        Kami menyebarkan informasi kebutuhan darah yang sudah kami cek kebenarannya
                        kesemua media yang kami miliki. Kami berusaha untuk menyebarkan informasi
                        kebutuhan yang benar, bukan informasi yang sudah kadaluarsa atau palsu.
                    </p>

                </div>
                <!-- End of Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-light text-uppercase mt-3 mb-4">Rekan</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="alink">Palang Merah ID</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">Telkom Indonesia</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">Rhesus Negatif ID</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">VOA Indonesia</a>
                        </li>
                    </ul>

                </div>
                <!-- End of Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-light text-uppercase mt-3 mb-4">Ikuti Kami</h5>
                    <p style="color: #ababab">Ikuti informasi terbaru dari kami di media sosial:</p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="alink">Facebook</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">Twitter</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">Instagram</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">Youtube</a>
                        </li>
                    </ul>

                </div>
                <!-- End of Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 pr-4 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-light text-uppercase mt-3 mb-4">Hubungi Kami</h5>
                    <p style="color: #ababab">Tertarik berlangganan cerita/artikel kami, yuk isi formulir di bawah</p>
                    <ul class="list-unstyled">
                        <li class="row" style="color: #ababab">
                            <div class="col-sm-1">
                                <i class="bi bi-telephone-plus mr-3"></i>
                            </div>
                            <div class="col-sm-10">
                                <p>Telepon : +62-812-2952-7357</p>
                            </div>
                        </li>
                        <li class="row" style="color: #ababab">
                            <div class="col-sm-1">
                                <i class="bi bi-envelope mr-3"></i>
                            </div>
                            <div class="col-sm-10">
                                <p>Bloodcare@gmail.co.id</p>
                            </div>
                        </li>
                        <li class="row" style="color: #ababab">
                            <div class="col-sm-1">
                                <i class="bi bi-geo-alt mr-3"></i>
                            </div>
                            <div class="col-sm-10">
                                <p>Jl. Perintis Kemerdekaan no.107 Temanggung - Indonesia</p>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- End of Grid column -->

            </div>
            <!-- End of Grid row -->

        </div>
        <!-- End of Footer Links -->

        <br>
        <br>

        <div class="footer-copyright text-center py-4" style="background-color: #192027; color: #999; font-weight: 300;">
            © Bloodcare 2022. All rights reserved.
        </div>

    </footer>
</body>

</html>
