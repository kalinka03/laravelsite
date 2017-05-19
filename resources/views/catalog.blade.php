@extends('layouts.app')

<!--  @section('title', 'Головна') -->

@section('content')

 
 <h1 style="text-align: center;">Каталог оголошень</h1>

<table border="3" width="90%" align="center" cellpadding="4" cellspacing="0">

<tr align="center" valign="center">
<th style="text-align: center; font-size: 18px; padding: 20px" >Категорії</th>
<th style="text-align: center; font-size: 18px; padding: 20px">Оголошення</th>
</tr>

<tr align="center" valign="center">
 <div class="catalog" >
 <td>
   @foreach( $categories as $key => $category )
   <a style="font-size: 18px; color: darkgreen" href="{{ route('catalog') }}"> {{ ++$key }}. {{ $category->title }}</a>
      <br> </br>
        @endforeach
      </td>
      <td>

   @foreach($ad as $key2 => $ad)
  <a  style="font-size: 18px; color: mediumvioletred"  href="{{ route('ad',['id' => $ad->id]) }}">
   {{ ++$key2 }}. {{ $ad->title }}
   <br> </br>

   @endforeach
     </a>

</td>  
  


</tr>

</div>
  <!--   <div class="catalog" style="float:left;">

        @foreach( $categories as $key => $category )

            <p>{{ ++$key }}. {{ $category->title }}</p>

            @if( $category->ads()->count() > 0 )
                @foreach($category->ads as $key2 => $ad)
                    <p>{{ ++$key2 }}. {{ $ad->title }}</p>
                @endforeach
            @endif

        @endforeach

    </div> -->
</table>





<br>
</br>



@endsection