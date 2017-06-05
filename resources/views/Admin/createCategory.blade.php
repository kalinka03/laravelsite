
<?@extends('admin/mainAdmin')
@section('title', 'admin.catalog')

@section('content')
    <h1>Створення нової категорії</h1>
    <form role="form" method="POST" action="{{ route('admin::catalog.store')}}">
        {{ csrf_field() }}
        <input type="hidden" title="_token" value="{{csrf_token()}}"/>
        <div class="form-group">
            <b class="ng-binding">Вкажіть нову категорію </b>
            <input type="text" name="title" placeholder="назва">
        </div>
        <button type="submit" class="btn btn-default">Відправити</button>
    </form>


@endsection