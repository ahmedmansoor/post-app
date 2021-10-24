<h1>All posts here</h1>


@foreach($allposted as $post)
{{$post->name}}
<!-- {{$post->image}} -->

@endforeach

<?php
// dd($post);