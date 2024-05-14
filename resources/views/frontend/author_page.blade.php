<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <title>AUTHORS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/font_awesome.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
             <style>
                   @import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap');

    </style>


    </head>
    <body >
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
                            <a href="" style="font-size: 50px; color:#f7bc22; font-family: 'Aref Ruqaa', serif; text-decoration: none;">ترشيحات الموقع</a><br><br><span class="glyphicon glyphicon-chevron-down" style="color:#f7bc22; font-size: 20px;"></span>
                        </div>



                       <section class="container text text-center " style="margin-left:40px;margin-top: 40px; display: none; ;height: 300px;" id="contant">


                          <div class="row topp">
                                    @foreach ($amr as $a)

                              <div class=" col-md-3 col-sm-4 col-xs-12 ">

                                  <div class="thumbnail">
                                      <img src="{{ asset('img/'.$a->img) }}" style="border-radius: 0px; height: 250px; width: 200px; padding-left: 30px;" alt="">
                                      <div class="caption">
                                          <h3 class="text text-center" style="font-family: 'Aref Ruqaa', serif; font-size:30px ">{{ $a->book_name }}</h3>
                                          <p class="text text-center"><a href="{{ 'public/../book/'.$a->book_id }}" style="color: white; font-weight: bold;">اضغط هنا </a></p>
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

        </nav>  <!--نهاية الهيدر-->
                    <h1 style="text-align: center ; margin-bottom:50px;margin-top:50px;font-size:50px">قسم المؤلفين </h1>



            <section class="container text text-center section1" style="">  <!--بداية المؤلفين-->

            <div class="row">
                @foreach ($data as $i)
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="thumbnail">
                    <img src="{{ asset('img/'.$i->img) }}" style="height: 350px; width: 400px;" alt="">
                    <div class="caption">
                      <h3>  {{ $i->author_name }}</h3>
                      <p style= >{{ $i->author_des }}
                      </p>
                      <p> <a href="{{ 'author/'.$i->author_id }}" class="btn btn-default" role="button">المزيد</a></p>
                       @if (Auth::check())
                     <div class="btn-group">
                        <button style="border-radius:30%;background-color: black">

                        <a href="{{URL::to('/author_page/destroy/'.$i->author_id)}} " style="color: red"  >Delete</a>
                           </button>

                          <button style="border-radius:30%;background-color: black">
                              <a href="{{URL::to('authorsbackend/create')}}" >ADD</a>
                          </button>
                    </div>

            @endif
                    </div>

                 </div>

                </div>
                @endforeach

            </div>





            </section>






        <!--نهاية المؤلفين-->


                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>








            <div id="top">
              <button style="background-color:gray; padding: 5px;  border: none;"><span class="glyphicon glyphicon-chevron-up"></span></button>
            </div>



      <section style="background-color: black; height: 200px; margin-top: 70px;">  <!--بداية الفوتر-->
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

      </section><!--نهاية الفوتر-->
          <script src="../public/js/jquery-3.5.1.min.js">
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
