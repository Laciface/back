@extends('base')

@section('menu_content')

@section('body_content')
    <div style="text-align: center;">
        <h1><(video_label)></h1>
        <iframe width="560" height="315" src="<(video_url)>" frameborder="0"></iframe>
    </div>
    <hr>
@endsection