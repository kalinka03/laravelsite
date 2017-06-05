@extends('layouts.app')

@section('title', 'Головна')

@section('content')

    <h1>{{ trans('index_info.ads') }}</h1>

      <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
{{ csrf_field() }}

	<select  style="width:150px" name="category" id="">
   @foreach( $categories as $category )
            {

            <option style="width=50px" value="{{ $category->id }}"> {{ $category->title }} </option>
              @endforeach
            
        }
    </select>

     <input type="text" name='title' placeholder="{{ trans('index_info.name') }}">
     <br>
     </br>
     <textarea type="text" name='text' placeholder="Текст"></textarea>
      <br>
     </br>
          <br/>
         Picture: <input type="file" name="picture" ><br/><br/>
    <button type="submit">{{ trans('index_info.create') }}</button>


    </form>

@endsection

   