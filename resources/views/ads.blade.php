@extends('layouts.app')

@section('title', 'Головна')

@section('content')

    <h1>{{ trans('index_info.ads') }}</h1>
    <div style=font-size:20px;">
        <p>{{$ads->title}}</p>
        @if ( file_exists( 'ads_files/pictures/picture_'.$ads->id.'.jpg' ) )

            <img src="/ads_files/pictures/picture_{{$ads->id}}.jpg" style="max-width:200px"; alt="" >

        @endif
        <p>{{$ads->text}}</p>
        <p>дата створення {{$ads->created_at}}</p>
        <p>юзер {{$user->name}}</p>

    </div>

@endsection

   