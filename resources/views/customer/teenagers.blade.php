@extends('layouts.app')

@section('content')
    <div class="container">
        <p> Welcome <b>{{auth()->user()->name}}</b> you are grown up </p>
    </div>
@stop
