@extends('layouts.app')

@section('title', 'Головна')

@section('content')

    <h1>Оголошення</h1>

 <div class="catalog">

        <table border="3" width="100%">

        @foreach( $categories as $key => $category )
                <tr>
                    <td>
           
            <a href="{{ route('catalog',['id' => $category->id]) }}">
                Категорія {{ $category->title }}
            </a>
            <br> </br>
                </td>

        <!--     <td>{{ ++$key }}. {{ $category->title }}</td> -->

            @if( $category->ads()->count() > 0 )
                        <td>
                @foreach($category->mainPageAds as $key2 => $ad)


                      <a href="{{ route('ad',['id' => $ad->id]) }}">{{ ++$key2 }}. {{ $ad->title }}</a>
                       <br> </br>

                @endforeach
            @endif

        @endforeach
                </td>
                 

 </table>
    </div>

    <form method="POST" action="/profile">
        {{ csrf_field() }}

    </form>


@endsection