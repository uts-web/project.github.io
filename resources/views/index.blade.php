<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.png') }}">
    <title>re - Creators</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('ela/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('ela/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('resto/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('ela/css/style.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- IF LOFIN -->
    @if($islogin['login']=='pelanggan')
    <link href=" {{ asset('ela/css/lib/toastr/toastr.min.css') }}" rel="stylesheet">
    @elseif($islogin['login']=='pegawai')
    <link href=" {{ asset('ela/css/lib/toastr/toastr.min.css') }}" rel="stylesheet">
    @else
    <!-- Kosong in lah -->
    @endif

    <style type="text/css">
        @media (min-width: 1024px){
            .page-wrapper {
                margin-left: 0px;
            }
        }
        .footer{
            left: 0;
        }
        #about .carousel-indicators li{
            background-color: rgba(0,0,0,.5)
        }
        #about .carousel-indicators li.active{
            background-color: rgba(0,0,0,.2)
        }
    </style>
</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <!-- Carousel -->
        <div class="row">
            <div class="col-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="container">
                      <div class="carousel-caption fadeInUp animated" style="bottom:0;top:200px">
                        <h2 class="display-1" style="color:#fff;">re - Creators</h2>
                        <p class="h2" style="color: #ddd;padding-top:20px;padding-bottom: 20px">Make new Inspiration</p>
                      </div>
                    </div>
                    <div class="carousel-item active" style="height: 100vh">
                      <img style="filter: brightness(40%); width:100%;" class="first-slide" src="resto/images/optimus.png" alt="First slide">
                    </div>
                    <div class="carousel-item" style="height: 100vh">
                      <img style="filter: brightness(40%); width:100%;" class="second-slide" src="resto/images/Alam.png" alt="Second slide">
                    </div>
                    <div class="carousel-item" style="height: 100vh">
                      <img style="filter: brightness(40%); width:100%;" class="third-slide" src="resto/images/rocketttt.png" alt="Third slide">
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- Carousel -->
        <!-- header header  -->
        <div class="header" style="top:0; width: 100%;">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a href="/">
                        <span>re - Creators</span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hidangan">Harga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reservasi">Pesan</a>
                        </li>
                        @if($islogin['login']=='pelanggan'||$islogin['login']=='pegawai')
                        @else
                        <li class="nav-item">
                            <a id="login" class="nav-link" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reservasi">Daftar</a>
                        </li>
                        @endif
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Profile -->
                        <li class="nav-item dropdown">

                            @if($islogin['login']=='pelanggan')
                            <a class="nav-link dropdown-toggle text-muted " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/profil')}}/{{$pelanggan['foto_pelanggan']}}" style="width:30px;height:30px;border-radius: 50%"></a>
                            @elseif($islogin['login']=='pegawai')
                            <a class="nav-link dropdown-toggle text-muted " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/profil')}}/{{$pegawai['foto_pegawai']}}" style="width:30px;height:30px;border-radius: 50%"></a>
                            @endif

                            
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="@if($islogin['login']=='pelanggan'){{URL('pelanggan')}}@elseif($islogin['login']=='pegawai'){{URL('pegawai')}}@endif"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                                    <li><a href="@if($islogin['login']=='pelanggan'){{URL('pelanggan/pengaturan')}}@elseif($islogin['login']=='pegawai'){{URL('pegawai/pengaturan')}}@endif"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="@if($islogin['login']=='pelanggan'){{URL('pelanggan/logout')}}@elseif($islogin['login']=='pegawai'){{URL('pegawai/logout')}}@endif"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <div id="about">
            <div class="row" style="background-image:url({{ asset('resto/images/wood_1.png')}});">
              <div class="col-md-6">
              </div>
              <center>
              <div class="col-md-6" style="padding:30px 50px;">
                <h2 class="display-4" style="color:#fff;padding-bottom: 10px;padding-top: 20px">Tentang Kami</h2>
                <p class="lead" style="color:#a99c92;font-weight: 300">re - Creators merupakan platform yang menawarkan jasa desain ataupun video editor. Kami telah berdiri sejak tahun 2021 dan telah memiliki banyak pelanggan.</p>
              </div>
            </center>
            </div>
        </div>

        <div id="kata" class="row">
            <div class="col-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
                </div>
            </div>                
        </div>

        <div id="hidangan" style="background-image:url({{ asset('resto/images/wood_1.png')}});">
            <div class="row">
                <div class="col-md-12" style="padding: 100px 0 50px 0">
                    <h1 class="display-4" style="color:#fff;text-align: center">Jasa yang Kami Tawarkan</h1>
                    <div class="container" style="margin-top: 100px">
                        <div class="row">

                            <?php
                                $i = 1;
                            ?>
                            @foreach($hidangan as $hidangan)
                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-md-6" style="height: 200px;background-image: url({{ asset('images/hidangan/'.$hidangan->foto_hidangan) }})">
                                    </div>
                                    <div class="col-md-6" style="background: @if($i==1||$i==4||$i==5) #f5f5f5 @else #faebcd @endif
                                    ;padding: 30px 20px">
                                        <div style="position:absolute;height:1px;width:1px;border:15px solid transparent;border-right: 15px solid @if($i==1||$i==4||$i==5) #f5f5f5 @else #faebcd @endif;left:-30px;top:80px"></div>
                                        <p style="text-align: center;color: #444;line-height: 200%"><span style="border-bottom:2px solid #fb6e14">{{$hidangan->nama_hidangan}}</span></p>
                                        <p class="display-4" style="margin-top:30px;font-size: 40px; text-align: center;color: #5e493a">IDR {{$hidangan->harga_hidangan}}</p>
                                    </div>
                                </div>
                            </div>


                            <?php
                                $i+=1;
                            ?>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="reservasi" class="container">
            <h2 class="display-4" style="text-align: center;color:#5e493a;padding:50px 0;">Pesan</h2>

            <div class="row">
                <div class="col-md-6">
                    <h3 class="display-4" style="font-size: 30px;margin-bottom: 30px">Contact Info</h3>
                    <ul>
                        <li style="padding-left: 50px;margin-bottom: 10px">
                            <i class="icon-home" style="position: absolute;left: 20px"></i>
                            Jalan Raya Tlogomas No. 246 Tlogomas, <br> Malang
                        </li>
                        <li style="padding-left: 50px;margin-bottom: 10px"><i class="icon-phone" style="position: absolute;left: 20px"></i> 081234567891</li>
                        <li style="padding-left: 50px;margin-bottom: 10px"><i class="icon-envelope" style="position: absolute;left: 20px"></i>re-creators@gmail.com</li>
                        <li style="padding-left: 50px;margin-bottom: 10px"><i class="icon-globe" style="position: absolute;left: 20px"></i> <a href="http://re-creators.herokuapp.com/" target="_blank">re - Creators</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3 class="display-4" style="font-size: 30px;margin-bottom: 30px">
                        @if($islogin['login']=='pelanggan'||$islogin['login']=='pegawai')
                            Profil
                      

        <div id="team" class="col-md-12" style="background-image:url({{ asset('resto/images/res_img_6.jpg')}});background-size: cover;padding-bottom: 20px">
            <div class="container">
                <h2 class="display-4" style="text-align:center;color:#fff;padding:50px 0;">Team</h2>
                <div class="row justify-content-center" style="padding: 15px">
                    <div class="col-md-2">
                        <img src="{{ asset('images/kelompok/dzerdd.png')}}" title="Liyan" class="rounded img-responsive" style="cursor: pointer;">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('images/kelompok/dzerdd.png')}}" title="Ardana" class="rounded img-responsive" style="cursor: pointer;">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('images/kelompok/dzerdd.png')}}" title="Noval" class="rounded img-responsive" style="cursor: pointer;">
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer" style="text-align: center;"> © 2021 All rights reserved. <a href="http://re-creators.herokuapp.com/">re - Creators <span id="tes"></span></a></footer>

        <div id="exampleModal" class="modal fadeInUp animated" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 10px">
              <div class="modal-header">
              <div class="modal-body">
                <h2 class="display-4" style="text-align:center;font-size: 30px;padding-bottom: 40px">Login</h2>
                <form method='POST' action='{{ URL('pelanggan/login') }}'>
                    @csrf
                    <div class='form-group row'>
                        <label class="col-md-3">Email</label>
                        <div class="col-md-9">
                            <input id='email' class='form-control' type='email' name='email' value='{{ old('email') }}' required autofocus>
                        </div>
                    </div>
                    <div class='form-group row'>
                        <label class="col-md-3">Password</label>
                        <div class="col-md-9">
                            <input id='password' class='form-control' type='password' name='password' required>
                        </div>
                    </div>
                    <div class='register-link m-t-15 text-center'>

                        <button type='submit' class='btn btn-primary btn-flat m-b-30 m-t-30'>Sign in</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-left:10px">Close</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ asset('ela/js/lib/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('ela/js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('ela/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('ela/js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('ela/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('ela/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('ela/js/custom.min.js') }}"></script>

    <script type="text/javascript">
        $(document).scroll(function(){
            var y = $(this).scrollTop();
            var header = $(window).height();
            if(y > header){
                $('.header').css('position','fixed');
            } else {
                $('.header').css('position','relative');
            }
        });
    </script>
    @if($islogin['login']=='pelanggan'||$islogin['login']=='pegawai')
    <script src="{{ asset('ela/js/lib/toastr/toastr.min.js') }}"></script>
    <!-- scripit init-->
    <script type="text/javascript">
        toastr.success('Kamu login sebagai @if($islogin['login']=='pelanggan') {{$pelanggan['nama_pelanggan']}} @else {{$pegawai['nama_pegawai']}} @endif','Logged In',{
            timeOut: 5000,
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-full-width",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "tapToDismiss": false

        })
    </script>
    @endif

</body>

</html>
