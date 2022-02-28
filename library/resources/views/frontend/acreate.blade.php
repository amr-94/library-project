
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
        <h3 aling="center">Add Author</h3>
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

        <form method="post" action="{{url('authorsbackend')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="author_id" class="form-control" placeholder="Author ID">
            </div>
            <div class="form-group">
                <input type="text" name="author_name" class="form-control" placeholder="Author Name">
            </div>
            <div class="form-group">
                <input type="text" name="author_rate" class="form-control" placeholder="Author rate from 10">
            </div>
            <div class="form-group">
                <!--<input type="text" name="nationality" class="form-control" placeholder="Author Nationality">-->
                <select name="nationality" class="form-control" placeholder="Author Nationality">
                    <option value="Egyptian">Egyptian</option>
                    <option value="Algerian">Algerian</option>
                    <option value="Lebanese">Lebanese</option>
                    <option value="Moroccan">Moroccan</option>
                    <option value="Palestinian">Palestinian</option>
                    <option value="Saudi Arabian">Saudi Arabian</option>
                    <option value="other..">other..</option>
                  </select>
            </div>
            <div class="form-group">
                <input type="text" name="about_author" class="form-control" placeholder="About Author">
            </div>
            <div class="form-group">
                <input type="text" name="author_des" class="form-control" placeholder="Author Describtion">
            </div>
            <div class="form-group">
                <input type="file" name="file" class="form-control" placeholder="Author photo">
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
