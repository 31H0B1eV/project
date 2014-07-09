@extends('layouts.default')

@section('title')
auth | index
@stop

@section('content')
<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-warning" role="alert">
        <h1>Warning! <small>{{ Session::get('message') }}</small></h1>
    </div>
    @endif

    @if(isset($content))
    {{ $content }}
    @endif
</div>
@stop