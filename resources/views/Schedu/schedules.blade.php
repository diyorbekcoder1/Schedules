<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Schedules</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('newassets/img/logos.png')}}" rel="icon">
    <link href="{{asset('newassets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('newassets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('newassets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('newassets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('newassets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('newassets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('newassets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('newassets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('newassets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Arsha - v4.9.1
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<div class="container">
    <main id="main">

        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">

                        <div class="card">

                            <div class="section-title">
                                <h2>Namangan muhandistlik-qurilish inistituti</h2>
                                <p>Dars jadvali</p>
                            </div>
                            @if(isset($sched))
                                @foreach($sched as  $schedule)

                                    <div class="card ">
                                        <img src="{{asset('storage/images/'.$schedule->image)}}" class="card-img-top"
                                             alt="...">
                                        <div style="text-align: center" class="card-body">


                                        </div>
                                    </div>

                                @endforeach

                            @endif

                        </div>

                    </div>


                </div>
            </div>
        </section>


    </main><!-- End #main -->
</div>


<!-- ======= Footer ======= -->

<!-- Vendor JS Files -->
<script src="{{asset('newassets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('newassets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('newassets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('newassets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('newassets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('newassets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('newassets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('newassets/js/main.js')}}"></script>

</body>

</html>
