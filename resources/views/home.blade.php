@extends('layouts.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')

    <section>

    <ul>

        @foreach ($comics as $comic)

            <li>
                <img src="{{$comic['thumb']}}" alt="">
                <h4>{{$comic['title']}}</h4>
            </li>

        @endforeach

    </ul>


    </section>
@endsection
