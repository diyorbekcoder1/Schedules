<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Schedules</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/logos.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Arsha - v4.9.1
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>


<main id="main">


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Namangan muhandistlik-qurilish inistituti</h2>
                <p>Dars jadvali</p>
            </div>

            <div class="row d-flex">



                @if(isset($schedules))
                    @foreach($schedules as $key => $group)
                        <div class="col-lg-12 mb-5 mt-lg-0">
                            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">

                                <div class="member-info">

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">№</th>
                                            <th scope="col">Kirish</th>
                                            <th scope="col">Chiqish</th>
                                            <th scope="col">Fan nomi</th>
                                            <th scope="col">Xona</th>
                                            <th scope="col">Fan turi</th>
                                            <th scope="col">O'qituvchi</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>

                                            <th scope="row">{{++$key}}</th>
                                            <td>{{$group->start_lesson}}</td>
                                            <td>{{$group->end_lesson}}</td>
                                            <td>{{$group->science_name}}</td>
                                            <td>{{$group->room}}</td>
                                            <td>{{$group->science_type}}</td>
                                            <td>{{$group->teacher}}</td>


                                        </tr>


                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    @endforeach

                @endif


            </div>

        </div>
    </section><!-- End Team Section -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
