@extends('master')


@section('content')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">






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

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif

            <form method="post" action="{{ url('authorsbackend') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Author Name</label>
                    <input type="text" name="author_name" class="form-control" placeholder="Author Name">
                </div>
                <div class="form-group">
                    <label for="">Author rate from 5</label>
                    <input type="number" name="author_rate" class="form-control" placeholder="Author rate from 5">
                </div>
                <div class="form-group">
                    <!--<input type="text" name="nationality" class="form-control" placeholder="Author Nationality">-->
                    <select name="nationality" class="form-control" placeholder="Author Nationality">
                        <option value="">Select Nationality</option>
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
                    <label for="">About Author</label>
                    <input type="text" name="about_author" class="form-control" placeholder="About Author">
                </div>
                <div class="form-group">
                    <label for="">Author photo</label>
                    <input type="file" name="a_img" class="form-control" placeholder="Author photo">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

@endsection
