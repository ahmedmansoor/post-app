<h1>All posts here</h1>




@foreach($allposted as $post)
{{$post->name}}
<!-- <td><img src="{{ asset('storage/app/'.$post->image) }}" alt="" title=""> </td> -->

@endforeach

<?php


dd($post->image);


?>