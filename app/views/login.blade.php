@extends('layouts.base')

@section('body')

{{ Form::open(array('url' => 'login')) }}

<h1>Login</h1>

<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text(
    'email',
    Input::old('email'),
    array(
    'placeholder' => 'awesome@awesome.com',
    'class' => 'form-control'
    )
    ) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password',
    array(
        'class' => 'form-control'
    )
    )}}
</p>

<p>{{ Form::submit('Submit!', array('class' => 'btn btn-primary')) }}</p>
{{ Form::close() }}

@stop