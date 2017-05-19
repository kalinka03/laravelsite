@extends('layouts.app')

@section('title', 'Головна')

@section('content')

    <h1>Оголошення</h1>

    <div class="catalog">

        <span> юзер -  {{ $user->name }}</span>
        <br> </br>
        @foreach($ads as $key2 => $ad)
             <li>{{ $ad->title }}</li>
    <p> {{ $ad->text }}</p>
    <span>дата створення  {{ $ad->created_at }}</span>
    <br> </br>
    <span> дата видалення {{ $ad->updated_at }}</span>
    <br> </br>
        @endforeach


    </div>

@endsection

   