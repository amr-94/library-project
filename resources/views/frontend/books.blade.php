<!DOCTYPE html>
<!-- ملف التعديل-->
<html>

<head>
    <meta charset="UTF-8">
    <title>BOOKS PAGE</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font_awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/books.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap');

        h1,
        h2,
        h3 {
            font-family: 'Aref Ruqaa', serif;
        }
    </style>

</head>

<body>
    <section class="header">

        <div class="row">


            <div class="header2 col-md-push-4 col-md-6 col-sm-push-3 col-sm-7 col-xs-push-1 col-xs-11">

                <br>

                <h1 class="" style="">اجعل القراءة عادتك اليومية</h1>


            </div>

        </div>
        <div>

            @if (Auth::check())
                <br> <a href="{{ asset('dashbord') }}"
                    style=" border: 2px solid #bf9423;
                         background-color: rgb(0, 0, 0);
                               color: #f7bc22;
                                 border-radius: 20px;
                               font-size: 20px;">dashbord</a>
            @endif

        </div>

    </section>
    <div style="clear: both"></div>
    <nav class="navbar navbar-default">
        <div class="navv">
            <div class="container">
                <br> <br>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    @if (auth()->check())
                        <li class="nav-item" style="color:white;font-size:20px">
                            {{ auth()->user()->name }}
                        </li>
                    @endif
                    <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.jpeg') }}" width="60px"
                            height="60px" style="border-radius: 25px; border: 4px solid #bf9423;"></a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <br>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            @if (Auth::check())
                                <a href="{{ asset('/register') }}">تسجيل ادمن جديد</a>
                            @endif
                        </li>
                        <li>
                            @if (Auth::guest())
                                <a href="{{ asset('login') }}">تسجيل الدخول</a>
                        </li>
                        @endif

                        @if (Auth::check())
                            <a href="{{ asset('logout') }}">تسجيل الخروج</a>
                        @endif


                        <li><a href="{{ asset('books') }}">الكتب</a></li>
                        <li><a href="{{ asset('novels') }}">الروايات</a></li>

                        <li><a href="{{ asset('home') }}">الرئيسية</a></li>
                        <li><a href="{{ asset('author_page') }}">المؤلفون</a></li>


                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <div class="row text-center">
                    <div class="col-md-8 col-md-push-2 col-xs-12">
                        <div style="height: 80px;  padding: 30px; margin-top: 110px;">
                            <form action="search" method="GET" role="search">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q"
                                        placeholder="Search users"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row text text-center">
                    <div class="text text-center" id="menu">
                        <h3 href=""
                            style="font-size: 50px; color:#f7bc22; font-family: 'Aref Ruqaa', serif; text-decoration: none;">
                            ترشيحات الموقع</h3><br><br><span class="glyphicon glyphicon-chevron-down"
                            style="color:#f7bc22; font-size: 20px;"></span>
                    </div>



                    <section class="container text text-center "
                        style="margin-left:40px;margin-top: 40px; display: none; ;height: 300px;" id="contant">



                        <div class="row topp">
                            @foreach ($books as $a)
                                <div class=" col-md-4 col-sm-4 col-xs-12 ">
                                    <div class="thumbnail" style="background:  none; border: none; box-shadow: none;">
                                        <img src="{{ asset('filles/books/image/' . $a->img) }}"
                                            style="border-radius: 0px; height: 250px; width: 200px;" alt="">
                                        <div class="caption">
                                            <h3 class="text text-center"
                                                style="font-family: 'Aref Ruqaa', serif; font-size:30px ;    color: #bf9423;">
                                                {{ $a->book_name }}</h3>
                                            <p class="text text-center"><a href="{{ route('book.show', $a->id) }}"
                                                    style="color: white; font-weight: bold;">اضغط هنا للتحميل</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </section>
                    <br>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>

    </nav>
    <h1 style="text-align: center ; margin-bottom:50px;margin-top:50px;font-size:50px">قسم الكتب </h1>





    <section class="container text text-center" style="">
        <div class="row">
            @foreach ($data as $i)
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                        <img src="{{ asset('filles/books/image/' . $i->img) }}" alt="">

                        <div class="caption">

                            <a href="{{ route('book.show', $i->id) }}">
                                <h3> {{ $i->book_name }}</h3>
                            </a>

                            @if (Auth::check())
                                <div class="btn-group">
                                    <button style="border-radius:30%;background-color: black">

                                        <a href="{{ URL::to('/book/destroy/' . $i->book_id) }} "
                                            style="color: red">Delete</a>
                                    </button>

                                    <button style="border-radius:30%;background-color: black">
                                        <a href="{{ route('booksbackend.create') }}">ADD</a>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            @endforeach
        </div>







    </section>


    <div id="top">
        <button style="background-color:gray; padding: 5px;  border: none;"><span
                class="glyphicon glyphicon-chevron-up"></span></button>
    </div>





    <section style="background-color: black; height: 200px; margin-top: 100px;">
        <footer class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-2 col-md-push-1  col-sm-push-6 col-sm-6  col-xs-6 col-xs-push-4">
                    <a href="" style="font-size: 30px; color: #bf9423;">تواصل معنا</a> <br> <br>
                    <i class="fa fa-google"
                        style="font-size: 20px; color: rgb(255, 255, 255); padding: 0px 10px;"></i>
                    <i class="fa fa-facebook"
                        style="font-size: 20px; color: rgb(16, 40, 255); padding: 0px 10px;"></i>
                    <i class="fa fa-twitter"
                        style="font-size: 20px; color: rgb(86, 207, 255); padding: 0px 10px;"></i>
                </div>
                <div class="col-md-6 col-md-push-4 col-sm-push-3 col-sm-9 col-xs-push-1 col-xs-11"
                    style="margin-top: 20px;">
                    <div class="row text-center">
                        <div class="col-md-8 col-md-push-2 col-xs-12">
                            <div style="height: 80px;  ">
                                <form action="search" method="GET" role="search">
                                    {{ csrf_field() }}
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q"
                                            placeholder="Search users"> <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


        </footer>

    </section>



    <script src="../public/js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {


            $("#menu").click(function() {

                $("#contant").slideToggle(1800);

            })

        });
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $("#top").fadeIn()
                } else {
                    $("#top").fadeOut()
                }

            })
            $("#top").click(function() {
                {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 1000)
                }
            })
        });
    </script>
