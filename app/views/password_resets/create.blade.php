@extends( 'layout' )

@section('container')
    <h2>Reset your password</h2>
    {{ Form::open(['route' => 'password_resets.store']) }}
    
        {{ Form::label('email', 'Email Address') }}

        {{ Form::text('email', null, ['required' => true]) }}

        {{ Form::submit('Reset') }}

    {{ Form::close() }}

    @if (Session::has('error'))
        <p>{{ Session::get('reason') }}</p>
    @elseif (Session::get('success'))
        <p>Please check your email</p>
    @endif

@stop