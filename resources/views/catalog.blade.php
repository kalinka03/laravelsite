
@extends('layouts.app')
@section('title', 'Каталог')

@section('content')

    <h1 style="text-align: center;">{{ trans('index_info.catalog_ads') }}</h1>

    <table border="3" width="90%" align="center" cellpadding="4" cellspacing="0">

    <tr align="center" valign="center">
    <th style="text-align: center; font-size: 18px; padding: 20px" >{{ trans('index_info.categories') }}</th>
    <th style="text-align: center; font-size: 18px; padding: 20px">{{ trans('index_info.ads') }}</th>
    </tr>
        <tr align="center" valign="center">
        <div class="catalog" >
        <td>
        @foreach( $categories as $key => $category )
            <p> <a style="font-size: 25px; color:black;" href="{{ route('catalog',['id' => $category->id]) }}">
                    {{ $category->title }}
                </a></p>
            {{--<p style="font-size: 30px; color:black;">
                {{ $category->title }}
            </p>--}}
        @endforeach
        </td>
            <td>
                @foreach( $ads as $key => $ad )
                    <div>
                        <a href="{{route('ad',['id' => $ad->id])}}" style="font-size: 25px; color:black;">
                            {{ $ad->title }}
                        </a>
                    </div>

                @endforeach

                    {{ $ads->links()}}
            </td>




        </div>






    </table>

@endsection







    {{--<div style="float:left; width: 50%;">--}}
        {{--<h1 style="color:palevioletred;">Категорії оголошень</h1>--}}

        {{--@foreach( $categories as $key => $category )--}}
            {{--<p> <a style="font-size: 25px; color:black;" href="{{ route('catalog',['id' => $category->id]) }}">--}}
                    {{--{{ $category->title }}--}}
                {{--</a></p>--}}
            {{--<p style="font-size: 30px; color:black;">--}}
                {{--{{ $category->title }}--}}
            {{--</p>--}}
        {{--@endforeach--}}


    {{--</div>--}}
    {{--</table>--}}
    {{--<div style="float:right;width: 50%;" >--}}
        {{--<h1 style="color:palevioletred;">Оголошення</h1>--}}


        {{--@foreach( $ads as $key => $ad )--}}
            {{--<div>--}}
                {{--<a href="{{route('ad',['id' => $ad->id])}}" style="font-size: 25px; color:black;">--}}
                    {{--{{ $ad->title }}--}}
                {{--</a>--}}
            {{--</div>--}}

        {{--@endforeach--}}

    {{--</div>--}}
    {{--{{ $ads->links()}}--}}
{{--@endsection--}}






























{{--@extends('layouts.app')--}}

{{--<!--  @section('title', 'Головна') -->--}}

{{--@section('content')--}}

 {{----}}
 {{--<h1 style="text-align: center;">Каталог оголошень</h1>--}}

{{--<table border="3" width="90%" align="center" cellpadding="4" cellspacing="0">--}}

{{--<tr align="center" valign="center">--}}
{{--<th style="text-align: center; font-size: 18px; padding: 20px" >Категорії</th>--}}
{{--<th style="text-align: center; font-size: 18px; padding: 20px">Оголошення</th>--}}
{{--</tr>--}}

{{--<tr align="center" valign="center">--}}
 {{--<div class="catalog" >--}}
 {{--<td>--}}
   {{--@foreach( $categories as $key => $category )--}}
   {{--<a style="font-size: 18px; color: darkgreen" href="{{ route('catalog', ['id' => $category->id]) }}"> {{ ++$key }}. {{ $category->title }}</a>--}}
      {{--<br> </br>--}}
        {{--@endforeach--}}
      {{--</td>--}}
      {{--<td>--}}

   {{--@foreach($ads as $key2 => $ad)--}}
  {{--<a  style="font-size: 18px; color: mediumvioletred"  href="{{ route('ad',['id' => $ad->id]) }}">--}}
   {{--{{ ++$key2 }}. {{ $ad->title }}--}}
   {{--<br> </br>--}}
      {{--{{ $ad->links()}}--}}
   {{--@endforeach--}}
     {{--</a>--}}

{{--</td>  --}}
  {{----}}


{{--</tr>--}}

{{--</div>--}}


        {{--@foreach( $categories as $key => $category )--}}

            {{--<p>{{ ++$key }}. {{ $category->title }}</p>--}}

            {{--@if( $category->ads()->count() > 0 )--}}
                {{--@foreach($category->ads as $key2 => $ad)--}}
                    {{--<p>{{ ++$key2 }}. {{ $ad->title }}</p>--}}
                {{--@endforeach--}}
            {{--@endif--}}

                            {{--@endforeach--}}



{{--</table>--}}





{{--<br>--}}
{{--</br>--}}



{{--@endsection--}}