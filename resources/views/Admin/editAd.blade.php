<?@extends('admin/mainAdmin')
@section('title', 'admin.Ads')

@section('content')
    <h1>Редагування оголошення</h1>
    <form role="form" method="POST" action="{{ route('admin::ad.update',[$ads->id])}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT"/>
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="form-group">
            <b class="ng-binding">Виберіть категорію</b>
            <select name="category_id">
                @foreach ($categories as $key=>$category)
                    <option value="{{$category->id}}">
                        {{$category->title}}

                    </option>
                    {{--<option {{ ($category->id=$ad->category_id) ? 'selected' : '' }}>{{$category->title}}</option>--}}
                @endforeach


            </select>
        </div>
                <div class="form-group">
            <b class="ng-binding">Нова назва оголошення</b>
            <input type="text" name="title" placeholder="{{$ads->title}}">
        </div>
        <div class="form-group">
            <b class="ng-binding">Текст оголошення</b>
            <input type="text" name="text" placeholder="{{$ads->text}}">
        </div>
        <br/>
        Avatar: <input type="file" name="picture" ><br/><br/>
        <button type="submit" class="btn btn-default">Відправити</button>
    </form>


@endsection