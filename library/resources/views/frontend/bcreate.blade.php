
@extends('master')


@section('content') <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">






                   <div class="row text-center">
                        <div class="col-md-12  col-sm-3">

                        <ul class="nav navbar-nav navbar-right">


                                   <li><a href="{{ asset('books') }}">الكتب</a></li>
                                   <li><a href="{{ asset('novels') }}">الروايات</a></li>

                                   <li><a href="{{ asset('home') }}">الرئيسية</a></li>
                                   <li><a href="{{ asset('author_page') }}">المؤلفون</a></li>


                      </ul>
                        </div>
                   </div>

<div class="row">
    <div class="col-md-12">
        <br>
        <h3 aling="center">Add Book</h3>
        <br>

                @if(count($errors) > 0)
        <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        </div>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
        </div>
        @endif

        <form method="post" action="{{url('booksbackend')}}" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <input type="text" name="book_name" class="form-control" placeholder="Book Name">
            </div>
            <div class="form-group">
                <input type="text" name="book_class" class="form-control" placeholder="Book Class">
            </div>
            <div class="form-group">
                <input type="text" name="book_rate" class="form-control" placeholder="Book rate from 10">
            </div>
            <div class="form-group">


              <label for="">Choose a author :</label>

               <select type="text" name="author_id" class="form-control" >

                <option name=".....">... </option>
                     @foreach ($author as $author)

              <option name="author_id">{{ $author->author_id }} </option>
                     @endforeach
               </select>
           </div>
            <div class="form-group">
                <input type="text" name="book_des" class="form-control" placeholder="Book Describtion">
            </div>
            <div class="form-group">
                <input type="file" name="file" class="form-control" placeholder="Book Cover">
            </div>
            <div class="form-group">
                <input type="file" name="pdf" class="form-control" placeholder="Book Cover">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>

    </div>

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


<h2>Author Table</h2>

<table>
  <tr>
    <th>author_id</th>
    <th>author_name</th>
  </tr>
  @foreach ($amr as $amr)

  <tr>
    <td>{{ $amr->author_id }}</td>
    <td>{{ $amr->author_name }}</td>
  </tr>
  @endforeach


</table>



@endsection
