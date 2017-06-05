@extends('admin/mainAdmin')
@section('title', 'admin.users')

@section('content')
    <div class="create">

        <p><a href="{{ route('admin::user.create')}}">{{ trans('index_info.user_create') }}</a></p>
    </div>

    <table style="border-collapse: collapse;">
        <tr style="border-collapse: collapse;">
            {{-- <td style="border: solid 1px black; padding: 10px">номер</td>--}}
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_name') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_email') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_password') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_admin') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_created') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_update') }}</td>
            <td style="border: solid 1px black; padding: 10px">{{ trans('index_info.tr_delete') }}</td>
        </tr>


        {{--   {{ $i=0;}};--}}


        @foreach ($users as $key => $user)
            {{--  $i++;--}}
            <tr style="border-collapse: collapse;">
                {{--<tr style="border-collapse: collapse;">
                    <td style="border: solid 1px black; padding: 10px">
                        <{{$i}}></td>--}}
                <td style="border: solid 1px black; padding: 10px">
                    {{$user->name}}</td>
                <td style="border: solid 1px black; padding: 10px">
                    {{$user->email}}</td>
                <td style="border: solid 1px black; padding: 10px">
                    {{$user->password}}</td>
                <td style="border: solid 1px black; padding: 10px">
                    {{$user->is_admin}}</td>
                <td style="border: solid 1px black; padding: 10px">
                    {{$user->created_at}}</td>
                <td style="border: solid 1px black; padding: 10px">
                    <a href="{{ route('admin::user.edit', [$user->id])}}">{{ trans('buttons.edit') }}</a>
                </td>
                 <td style="border: solid 1px black; padding: 10px">
                     <form role="form" method="POST" action="{{ route('admin::user.destroy',[$user->id])}}">
                         {{ csrf_field() }}
                         <input type="hidden" name="_method" value="DELETE"/>

                         <button type="submit" class="btn btn-default">{{ trans('buttons.delete') }}</button>
                     </form>

                 </td>

            </tr>
        @endforeach

    </table>
    {{ $users->links()}}
@endsection