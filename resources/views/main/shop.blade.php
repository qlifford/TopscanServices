<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font awesome compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <title>Topscan services</title>
</head>
<body>
    
    {{-- <div id="layout">
        <div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-left">
                            <li><a href="tel:+911234567890"><i class="fa fa-phone"></i> +91-1234567890</a></li>
                            <li><a href="mailto:contact@surfsidemedia.in"><i class="fa fa-envelope"></i>
                                    contact@surfsidemedia.in</a></li>
                        </ul>
                        <ul class="visible-xs visible-sm">
                            <li class="text-left"><a href="tel:+911234567890"><i class="fa fa-phone"></i>
                                    +91-1234567890</a></li>
                            <li class="text-right"><a href="index.php/changelocation.html"><i
                                        class="fa fa-map-marker"></i> Faridabad, Haryana</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-right">
                            <li><i class="fa fa-comment"></i> Live Chat</li>
                            <li><a href="index.php/changelocation.html"><i class="fa fa-map-marker"></i> Faridabad,
                                    Haryana</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
    <section class="main">
        <nav>
            <a href="{{url('/')}}" class="logo">
                <img src="{{asset('images/logo.png')}}" alt="...">
                {{-- <i class="fa fa-bars" aria-hidden="true"></i> --}}
            </a>

            <ul>
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li class=""><a href="{{url('main/shop')}}">Shop</a></li>
                <li class=""><a href="{{url('main/services')}}">Services</a></li>
                <li class=""><a href="{{url('main/about')}}">About</a></li>
                <li class=""><a href="{{url('main/contact')}}">Contact</a></li>
                <li class=""><a href="{{url('main/blog')}}">Blog</a></li>
            </ul>
            <ul class="log">
                <li><a href="" style="color: blue;">login</a></li>
                <li><a href="" style="color: green;">Register</a></li>
            </ul>
        </nav>
    </section>

    <section class="main-part">
        <center><h1>Shop 
            page</h1></center>
    </section>
</body>
</html>