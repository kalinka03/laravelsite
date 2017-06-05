<?@extends('admin/mainAdmin')
@section('title', 'admin.ads')

@section('content')

<h1>Створення нового оголошення</h1>
    <form role="form" method="POST" action="{{ route('admin::ad.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="form-group">
            <b class="ng-binding">Виберіть категорію</b>
            <select name="category_id">
                @foreach ($categories as $key=>$category)
                <option value="{{$category->id}}">
                    {{$category->title}}
                    </option>
@endforeach
            </select>
        <div class="form-group">
            <b class="ng-binding">Напишіть заголовок повідомлення</b>
            <input type="title" name="title" placeholder="">
        </div>
        <div class="form-group">
            <b class="ng-binding">Повідомлення</b>
            <textarea type="text" name="text">
            </textarea>
        </div>
            <br/>
            Picture: <input type="file" name="picture" ><br/><br/>
        <button type="submit" class="btn btn-default">Відправити</button>
    </form>


@endsection