@extends('layouts.site')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>{{ $header }}</h1>
            <p>{{ $message }}</p>
            <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">

            <div class="form">
                <form method="post" action="{{ route('articleStore') }}">
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="alias">Псевдоним</label>
                        <input type="text" class="form-control" id="alias" name="alias">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Краткое описание</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Полное описание</label>
                        <textarea class="form-control" name="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>

                    {{ csrf_field() }}
                </form>
            </div>

        </div>

        <hr>

        <footer>
            <p>&copy; Company 2017</p>
        </footer>
    </div> <!-- /container -->
@endsection