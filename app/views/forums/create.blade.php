@extends('layout')

@section('container')


@extends('layout')

@section('container')
<section class="find login">
    <h2>Créer un forum sur : </h2>
    <div class="post">
        @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
        @endif
        <ul>
            <li>{{ Form::open(array('route' => 'forums.store','files' => true)) }}</li>

            <li>{{ Form::label('title', 'Nom du Forum') . Form::text('title','',array('placeholder' => 'Nom du forum')) }}</li>

            <li>{{ Form::label('post', 'Contenu') }}</li>

            <li>{{ Form::textarea('post','',array('class' => 'post')) }}</li>

            <h3>Catégories</h3>

            @foreach($categories as $categorie)
            <li>{{ Form::checkbox('categories[]', $categorie->id, array('class' => 'cat')) . Form::label('categories', $categorie->name, array('class' => 'cat')) }}</li>
            @endforeach

            <li>{{ Form::hidden('user_id',Auth::user()->id) }}</li>

            <li>{{ Form::submit('Poster') }}</li>

            <li>{{ Form::token() . Form::close() }}</li>
        </ul>
        {{ implode('', $errors->all('<li>:message</li>'))}}
    </div>
</section>
@stop



@stop