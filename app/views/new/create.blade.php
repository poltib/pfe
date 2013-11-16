@extends('layout')

@section('container')
<section class="find login">
<h2>Poster une actualité</h2>
<div class="left">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::open() }}

    {{ Form::label('name', 'Nom du post') . Form::text('name','',array('placeholder' => 'Nom')) }}

    {{ Form::label('content', 'Contenu') . Form::textarea('content') }}

    {{ Form::submit('Poster!') }}

    {{ Form::token() . Form::close() }}
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop