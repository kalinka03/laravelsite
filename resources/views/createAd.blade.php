@extends('layouts.app')

@section('title', 'Головна')

@section('content')

    <h1>Оголошення</h1>

      <form method="POST" action="{{ route('create') }}">
{{ csrf_field() }}

	<select  style="width:150px" name="category" id="">
   @foreach( $categories as $category )
            {

            <option style="width=50px" value="{{ $category->id }}"> {{ $category->title }} </option>
              @endforeach
            
        }
    </select>

     <input type="text" name='title' placeholder="Назва">
     <br>
     </br>
     <textarea type="text" name='text' placeholder="Текст"></textarea>
      <br>
     </br>
    <button type="submit">Створити нове оголошення</button>
     

    </form>

@endsection

   