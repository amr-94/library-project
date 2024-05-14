<!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>author page</title>
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/font_awesome.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/authorstyle.css') }}">
               <style>
            /*@import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap'); */
            @import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap');
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
                           <br>     <a href="{{ asset('dashbord') }}" style=" border: 2px solid #bf9423;
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
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  @if( auth()->check() )
                <li class="nav-item" style="color:white;font-size:20px">
                    {{ auth()->user()->name }}
                </li>
            @endif
                          <a class="navbar-brand" href="#"><img src="{{ asset ('img/logo.jpeg') }}" width="60px" height="60px" style="border-radius: 25px; border: 4px solid #bf9423;"></a>

                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <br>
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                        <ul class="nav navbar-nav navbar-right">
                                         <li>  @if (Auth::check())
                <a href="{{ asset('/register') }}" >تسجيل ادمن جديد</a>
               @endif </li>
                                <li>
                                         @if (Auth::guest())
                <a href="{{ asset('login') }}">تسجيل الدخول</a>
                                   </li>
                                     @endif

                                      @if (Auth::check())
                <a href="{{ asset('logout') }}" >تسجيل الخروج</a>
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
                          <h3 href="" style="font-size: 50px; color:#f7bc22; font-family: 'Aref Ruqaa', serif; text-decoration: none;">ترشيحات الموقع</h3><br><br><span class="glyphicon glyphicon-chevron-down" style="color:#f7bc22; font-size: 20px;"></span>
                      </div>



                      <section class="container text text-center " style="margin-left:40px;margin-top: 40px; display: none; ;height: 300px;" id="contant">



                          <div class="row topp">
                            @foreach ($amr as $a)
                              <div class=" col-md-4 col-sm-4 col-xs-12 ">
                                  <div class="thumbnail">
                                      <img src="{{ asset('img/'.$a->img) }}" style="border-radius: 0px; height: 250px; width: 200px; padding-left: 30px;" alt="">
                                      <div class="caption">
                                          <h3 class="text text-center" style="font-family: 'Aref Ruqaa', serif; font-size:30px ">{{ $a->book_name }}</h3>
                                          <p class="text text-center"><a href="{{ '../book/'.$a->book_id }}" style="color: white; font-weight: bold;">اضغط هنا للتحميل</a></p>
                                      </div>
                                  </div>
                              </div>
@endforeach
                          </div>

                      </section>
                      <br> <br>
                  </div>
              </div>
              <!-- /.container-fluid -->
          </div>

      </nav>


        <div style="clear: both"></div>




        <section class="container" style="margin-top: 80px;">
            <div class="row">



                <div class="col-md-6 col-xs-12 col-sm-12 ">
                      <img src="{{ asset('img/'.$author->img) }}"style=" border-radius: 45px;" height="450px" width="460px">
                </div>


                <div class="col-md-6 col-xs-12 col-sm-12">


                    <h2 class="text text-center" style="background-color:#3e3e3e; color: white; margin-bottom: 25px; font-family: 'Aref Ruqaa', serif;"> {{ $author->author_name }}</h2>


                    <p class="text text-center" style="text-align: center;  font-size: 18px;">{{ $author->about_author }}</p>

                </div>
            </div>

        </section>





        <section class="container" style="margin-top: 80px;">
            <h2 class="text text-center" style="font-family: 'Aref Ruqaa', serif; font-size: 60px; margin-bottom:80px; ">أهم مؤلفاته</h2>
            <div class="row">
                @foreach ($books as $a)

                <div class="col-xs-12 col-md-4 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="{{ asset('img/'.$a->img) }}" style="height: 400px; " alt="">
                        <div class="caption">
                            <h3 class="text text-center" style="font-family: 'Aref Ruqaa', serif; font-size:30px "> {{ $a->book_name }}  </h3>
                            <p class="text text-center"><a href="{{ '../book/'.$a->book_id }}">اضغط هنا </a></p>
                        </div>
                    </div>



                </div>
                @endforeach
@foreach ($novels as $a)

                <div class="col-xs-12 col-md-4 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="{{ asset('img/'.$a->img) }}" style="height: 400px; " alt="">
                        <div class="caption">
                            <h3 class="text text-center" style="font-family: 'Aref Ruqaa', serif; font-size:30px "> {{ $a->novel_name }}  </h3>
                            <p class="text text-center"><a href="{{ '../novel/'.$a->novel_id }}">اضغط هنا </a></p>
                        </div>
                    </div>


            </div>
            @endforeach
        </section>






        <div id="top">
            <button style="background-color:gray; padding: 5px;  border: none;"><span class="glyphicon glyphicon-chevron-up"></span></button>
        </div>





        <section style="background-color: black; height: 200px; margin-top: 80px;">
            <footer class="container">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-2 col-md-push-1  col-sm-push-6 col-sm-6  col-xs-6 col-xs-push-4">
                        <a href="" style="font-size: 30px; color: #bf9423;">تواصل معنا</a> <br> <br>
                        <i class="fa fa-google" style="font-size: 20px; color: rgb(255, 255, 255); padding: 0px 10px;"></i>
                        <i class="fa fa-facebook" style="font-size: 20px; color: rgb(16, 40, 255); padding: 0px 10px;"></i>
                        <i class="fa fa-twitter" style="font-size: 20px; color: rgb(86, 207, 255); padding: 0px 10px;"></i>
                    </div>
                     <div class="col-md-6 col-md-push-4 col-sm-push-3 col-sm-9 col-xs-push-1 col-xs-11" style="margin-top: 20px;">
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








          <script src="{{ asset('js/jquery-3.5.1.min.js') }}">
        </script>
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


    </body>

    </html>
