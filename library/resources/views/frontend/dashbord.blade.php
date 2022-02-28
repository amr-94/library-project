<!DOCTYPE html>
    <!-- ملف التعديل-->
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Dashbord PAGE</title>
          <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/font_awesome.min.css') }}">
             <link rel="stylesheet" href="{{ asset('css/authorstyle.css') }}">
             <style>
                /*@import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap'); */
                @import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap');
                h1,h2,h3 {
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
                              <form action="search" method="POST" role="search">
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
                            @foreach ($books as $a)
                              <div class=" col-md-4 col-sm-4 col-xs-12 "  >
                                  <div class="thumbnail" style="background:  none; border: none; box-shadow: none;">
                                      <img src="{{ asset('img/'.$a->img) }}" style="border-radius: 0px; height: 250px; width: 200px; padding-left: 30px;" alt="">
                                      <div class="caption">
                                          <h3 class="text text-center" style="font-family: 'Aref Ruqaa', serif; font-size:30px ">{{ $a->book_name }}</h3>
                                          <p class="text text-center"><a href="{{ 'public/../book/'.$a->book_id }}" style="color: white; font-weight: bold;">اضغط هنا للتحميل</a></p>
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
                              <h1 style="text-align: center ; margin-bottom:50px;margin-top:50px;font-size:50px">dashbord </h1>


              {{-- <div class=" row">
                                        <div class="col-md-4  col-xs-12">

                              <div class="card text-center">

  <div class="card-body">
    <h1 class="card-title">اضافة او تعديل المؤلف</h1>
    <a href="{{asset('authorsbackend/create')}}" class="btn btn-primary">اضافة مؤلف</a>
  </div>


  <div class="card-body">
    <h1 class="card-title">اضافة او تعديل الكتب</h1>
    <a href="{{asset('booksbackend/create')}}" class="btn btn-primary">اضافة الكتب</a>
  </div>


  <div class="card-body">
    <h1 class="card-title">اضافة او تعديل الروايات</h1>
    <a href="{{asset('novelsbackend/create')}}" class="btn btn-primary">اضافة الروايات</a>
  </div>



</div>



</div>



              </div> --}}





       <div class="" style="background-color:  #eceaea ;">
            <section class="cont container" style="margin-top: 50px;margin-right: 50px;">

                 <div class=" row">
                     <div class="col-xs-12 col-md-4 col-sm-4 " style="margin-right: px;">
                            <div class="thumbnail">
                                 <div class="caption">
                                     <h3 class="text text-center"style="font-family: 'Aref Ruqaa', serif; font-size:30px;color:  #f7bc22;">اضافة مؤلف</h3>
                                     <p class="text text-center"><a href="{{asset('authorsbackend/create')}}"style="color: #000;font-size: medium;" >اضغط هنا </a></p>
                                 </div>
                            </div>





                        </div>
                           <div class="col-xs-12 col-md-4 col-sm-4 " style="margin-right: 0px;">
                            <div class="thumbnail">
                                 <div class="caption">
                                     <h3 class="text text-center"style="font-family: 'Aref Ruqaa', serif; font-size:30px;color:  #f7bc22;">اضافة كتاب</h3>
                                     <p class="text text-center"><a href="{{asset('booksbackend/create')}}"style="color: #000;font-size: medium;" >اضغط هنا </a></p>
                                 </div>
                            </div>





                        </div>
                           <div class="col-xs-12 col-md-4 col-sm-4 " style="margin-right: 0px;">
                            <div class="thumbnail">
                                 <div class="caption">
                                     <h3 class="text text-center"style="font-family: 'Aref Ruqaa', serif; font-size:30px;color:  #f7bc22;">اضافة رواية</h3>
                                     <p class="text text-center"><a href="{{asset('novelsbackend/create')}}"style="color: #000;font-size: medium;" >اضغط هنا </a></p>
                                 </div>
                            </div>





                        </div>



                    </div>






            </section>

        </div>








<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #b3aeae;
}
</style>


<h2>user Table</h2>

<table>
  <tr >
          <th>user ID</th>

    <th>user email</th>
    <th>user name</th>
        <th>user edit</th>


  </tr>
  @foreach ($use as $use)

  <tr>
    <td>{{ $use->id }}</td>



    <td>{{ $use->email }}</td>
        <td>{{ $use->name }}</td>


 @if (Auth::check())
 <td>

                        <button style="border-radius:30%;background-color: black">

                        <a href="{{URL::to('/user/destroy/'.$use->id)}} " style="color: red"  >Delete</a>
                           </button>


 </td>

            @endif
  </tr>
  @endforeach


</table>









 <div id="top">
          <button style="background-color:gray; padding: 5px;  border: none;"><span class="glyphicon glyphicon-chevron-up"></span></button>
        </div>





        <section style="background-color: black; height: 200px; margin-top: 100px;">
            <footer class="container">
              <div class="row" style="margin-top: 30px;">
                <div class="col-md-2 col-md-push-1  col-sm-push-6 col-sm-6  col-xs-6 col-xs-push-4">
                  <a href="" style="font-size: 30px; color: #bf9423;">تواصل معنا</a> <br> <br>
                            <i class="fa fa-google" style="font-size: 20px; color: rgb(255, 255, 255); padding: 0px 10px;"></i>
                            <i class="fa fa-facebook" style="font-size: 20px; color: rgb(16, 40, 255); padding: 0px 10px;"></i>
                            <i class="fa fa-twitter" style="font-size: 20px; color: rgb(86, 207, 255); padding: 0px 10px;"></i>
                </div>
                <div class="col-md-6 col-md-push-4 col-sm-push-3 col-sm-9 col-xs-push-1 col-xs-11" style="margin-top: 20px;">
                  <button type="submit" style="width: 50px;  height: 42px; border: none; background-color: #383531; padding-top: 5px;" ><span class="glyphicon glyphicon-search" style="color: darkgoldenrod;"></span></button>
                  <input type="text" style="width: 320px; padding: 13px 0px 9px 190px; border: none; background-color: #383531; color: darkgoldenrod;"  placeholder="تبحث عن كتاب معين">
                </div>
              </div>


            </footer>

        </section>



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
