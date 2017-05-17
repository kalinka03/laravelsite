@extends('layouts.app')

@section('title', 'Головна')

@section('content')

    <h1>Оголошення</h1>

    <div class="catalog">

        <span> юзер -  {{ $user->name }}</span>
        <br> </br>

             <li>{{ $ads->title }}</li>
    <p> {{ $ads->text }}</p>
    <span>дата створення  {{ $ads->created_at }}</span> 
    <br> </br>
    <span> дата видалення {{ $ads->updated_at }}</span>
    <br> </br>

   

    </div>

@endsection

   