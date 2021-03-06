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

            @if ($article)
                <div class="col-md-9">
                    <h2>{{ $article->title }}</h2>
                    <div>{!! $article->text !!}</div>
                </div>
            @endif
        </div>

        <hr>

        <footer>
            <p>&copy; Company 2017</p>
        </footer>
    </div> <!-- /container -->
@endsection