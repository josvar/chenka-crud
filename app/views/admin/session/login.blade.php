@extends('admin.layouts.master')

@section('title')
ChenkaCrud | Login
@stop

@section('body_class')
login
@stop

@section('body')
<div id="login">
    <h1><span class="">ChenkaCrud</span></h1>

    {{ Form::open(['route' => 'admin.session.store', 'class' => 'form-signin', 'role' => 'form']) }}
    @include('admin.session.partials._form-login')
    {{ Form::close() }}

    <section class="footer">
        <a href="#">Forgot Password?</a>
        <a href="#">&larr; Back to Boris WebSite</a>
    </section>
</div>
@stop
