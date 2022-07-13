@extends('template.base')

@section('pageTitle', 'Comics')

@section('pageMain')
    <main>
        <!-- jumbotron -->
        <div id="jumbotron">
        </div>

        <div>
            <h1>{{$comic["title"]}}</h1>
        </div>
    </main>
@endsection
