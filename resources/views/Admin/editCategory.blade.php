<?@extends('admin/mainAdmin')
@section('title', 'admin.categories')

@section('content')
    <h1>Редагування користувача</h1>
    <form role="form" method="POST" action="{{ route('admin::catalog.update',[$categories->id])}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT"/>
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="form-group">
            <b class="ng-binding">Нова назва категорії</b>
            <input type="text" name="title" placeholder="{{$categories->title}}">
        </div>
        <br/>
        Avatar: <input type="file" name="avatar" ><br/><br/>

        <button type="submit" class="btn btn-default">Відправити</button>
    </form>


@endsection