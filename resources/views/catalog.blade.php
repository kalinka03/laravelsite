@extends('layouts.app')

<!--  @section('title', 'Головна') -->

@section('content')

 
 <h1 style="text-align: center;">Каталог оголошень</h1>

<table border="3" width="90%" align="center" cellpadding="4" cellspacing="0">
<!--  <tr>
    <td>Категорія</td>
    <td>Оголошення</td>
</tr> -->

<tr align="center" valign="center">
<th>Категорії</th>
<th>Оголошення</th>
</tr>

<tr align="center" valign="center">
 <div class="catalog" >

 

 <td>

   @foreach( $categories as $key => $category )

   <a href="{{ route('catalog') }}"> {{ ++$key }}. {{ $category->title }}</a>
      <br> </br>
        @endforeach
      </td>
      <td>

   
   @foreach($ads as $key2 => $ad)
  <a href="{{ route('ad',['id' => $ad->id]) }}">
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