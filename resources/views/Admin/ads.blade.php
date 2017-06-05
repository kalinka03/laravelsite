@extends('admin/mainAdmin')
@section('title', 'admin.ads')

@section('content')
    <div class="create">

        <p><a href="{{ route('admin::ad.create')}}">{{ trans('index_info.create') }}</a></p>
    </div>

    <table style="border-collapse: collapse;">
        <tr style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_user') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_category') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_title') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_text') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_created') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_update') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_delete') }}</td>
        </tr>


        @foreach ($ads as $key => $ad)
            <tr style="border-collapse: collapse;">
                <td style="border: solid 1px black; padding: 10px">
                    {{ $ad->user->name }} </td>

                <td style="border: solid 1px black; padding: 10px">
                    {{ $ad->category->title }} </td>
                <td style="border: solid 1px black; padding: 10px">
                    {{$ad->title}}</td>
                <td style="border: solid 1px black; padding: 10px">
                    {{$ad->text}}</td>
                <td style="border: solid 1px black; padding: 10px">
                    {{$ad->created_at}}</td>
                <td style="border: solid 1px black; padding: 10px">
                    <a href="{{ route('admin::ad.edit', [$ad->id])}}">{{ trans('buttons.edit') }}</a>
                </td>
                <td style="border: solid 1px black; padding: 10px">
                    <form role="form" method="POST" action="{{ route('admin::ad.destroy',[$ad->id])}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE"/>

                        <button type="submit" class="btn btn-default">{{ trans('buttons.delete') }}</button>
                    </form>

                </td>

            </tr>
        @endforeach

    </table>
    {{ $ads->links()}}
@endsection