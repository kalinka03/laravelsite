<?@extends('admin/mainAdmin')
@section('title', 'admin.users')

@section('content')
    <h1>Редагування користувача</h1>
    <form role="form" method="POST" action="{{ route('admin::user.update',[$user->id])}}">
        <input type="hidden" name="_method" value="PUT"/>
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="form-group">
            <b class="ng-binding">Нове ім'я</b>
            <input type="text" name="name" placeholder="{{$user->name}}">
        </div>
        <div class="form-group">
            <b class="ng-binding">Вкажіть пароль</b>
            <input type="text" name="password" placeholder="password">
        </div>
        <div class="form-group">
            <b class="ng-binding">Вкажіть email</b>
            <input type="email" name="email" placeholder="{{$user->email}}">
        </div>

        <div class="form-group">
            <b class="ng-binding">Вкажіть роль</b>
            <input type="text" name="will_admin" >
        </div>
        <button type="submit" class="btn btn-default">Відправити</button>
    </form>


@endsection