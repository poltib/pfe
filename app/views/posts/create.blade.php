@extends('layout')

@section('container')
<section class="find login">
<h2>Poster une actualité</h2>
<div class="left">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::open(array('route' => 'posts.store','files' => true)) }}

    {{ Form::label('title', 'Nom du post') . Form::text('title','',array('placeholder' => 'Nom')) }}

    {{ Form::label('post', 'Contenu') . Form::textarea('post') }}

    {{ Form::hidden('user_id',Auth::user()->id) }}

    {{ Form::submit('Poster!') }}

    {{ Form::token() . Form::close() }}
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop