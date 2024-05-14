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
            <h3 aling="center">Add Novel</h3>
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

            <form method="post" action="{{ route('novelsbackend.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="novel_name">Novel Name</label>
                    <input type="text" name="novel_name" class="form-control" placeholder="Novel Name">
                </div>
                <div class="form-group">
                    <label for="novel_rate">Novel Rate</label>
                    <input type="number" name="novel_rate" class="form-control" placeholder="Novel rate from 10">
                </div>
                <div class="form-group">
                    <label for="novel_des">Novel Describtion</label>
                    <input type="text" name="novel_des" class="form-control" placeholder="Novel Describtion">
                </div>
                <div class="form-group">
                    <label for="about_author">About Author</label>
                    <input type="text" name="about_author" class="form-control" placeholder="About Author">
                </div>
                <div class="form-group">
                    <label for="n_img">Novel Image</label>
                    <input type="file" name="n_img" class="form-control">
                </div>
                <div class="form-group">
                    <label for="n_pdf">Novel Pdf</label>
                    <input type="file" name="n_pdf" class="form-control">
                </div>
                <div class="form-group">
                    <label for="author_id">Choose a author :</label>
                    <select type="text" name="author_id" class="form-control">

                        <option name=".....">... </option>
                        @foreach ($author as $author)
                            <option name="author_id" value="{{ $author->id }}">{{ $author->author_name }} </option>
                        @endforeach
                    </select>
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

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>





@endsection
