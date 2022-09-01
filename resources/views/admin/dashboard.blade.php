@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ __('Dashboard') }}</h1>
@stop

@section('content')
    <!--<p>{{ __("You're logged in!") }}</p>-->
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">{{ __("You're logged in!") }}</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit laboriosam culpa perspiciatis ipsum vero voluptate nulla quis voluptas quisquam magni distinctio praesentium enim, placeat alias, ullam neque reprehenderit nobis maxime.</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
