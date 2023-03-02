<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PARGO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('parkngo/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('parkngo/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('parkngo/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('parkngo/lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('parkngo/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('parkngo/css/style.css')}}" rel="stylesheet">
</head>
<body>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('parkngo/img/parking1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Park Go</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Car Park Booking System</h1>
                            <a href="{{route('user.login')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Sign In As User</a>
                            <a href="{{route('login.page')}}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Sign In As Admin</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('parkngo/img/parking2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Park Go</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Car Park Booking System</h1>
                            <a href="{{route('user.login')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Sign In As User</a>
                            <a href="{{route('login.page')}} " class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Sign In As Admin</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('parkngo/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('parkngo/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('parkngo/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('parkngo/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('parkngo/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('parkngo/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('parkngo/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('parkngo/lib/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('parkngo/lib/twentytwenty/jquery.twentytwenty.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('parkngo/js/main.js')}}"></script>
</body>

</html>