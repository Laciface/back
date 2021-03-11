@extends('base')

@section('menu_content')
    {{ $menu_content }}
@endsection

<div style="text-align: center;">
    <h1>Info</h1>
    <table border="1" width="640">
        <tr>
            <td><b>Label</b></td>
            <td><b>Data</b></td>
        </tr>
@section('body_content')
        @foreach($body_content as $row)
            <tr>
                <td><b>{{$row->LABEL}}</b></td>
                <td><b>{{$row->DATA}}</b></td>
            </tr>
        @endforeach
    </table>
</div>

@endsection