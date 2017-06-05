@extends('admin/mainAdmin')
@section('title', 'admin.categories')
@section('content')
    <div class="create">
        <p><a href="{{ route('admin::catalog.create')}}">{{ trans('index_info.catalog_create') }}</a></p>
    </div>
    <table style="border-collapse: collapse;">
        <tr style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.name') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_created') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_update') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_delete') }}</td>
        </tr>
        @foreach ($categories as $key => $category)
            <tr>
                <td style="border: solid 1px black; padding: 10px">
                    {{$category->title}}</td>
                <td style="border: solid 1px black; padding: 10px">
                    {{$category->created_at}}</td>
                <td style="border: solid 1px black; padding: 10px">
                    <a href="{{ route('admin::catalog.edit', [$category->id])}}">{{ trans('buttons.edit') }}</a>
                </td>
                <td style="border: solid 1px black; padding: 10px">
                    <form role="form" method="POST" action="{{ route('admin::catalog.destroy',[$category->id])}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" class="btn btn-default">{{ trans('buttons.delete') }}</button>
                    </form>
                </td>
                    {{--@if ( file_exists( 'files/avatars/avatar_'.$category->id.'.jpg' ) )--}}
            {{--<td>--}}
     {{--<img src="/files/Avatars/avatar_{{$category->id}}.jpg" style="max-width:100px"; alt="" >--}}
                {{--</td>--}}
{{--@endif--}}
            </tr>
        @endforeach
    </table>
@endsection