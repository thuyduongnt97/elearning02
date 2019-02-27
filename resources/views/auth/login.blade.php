<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>{!! __('text.login')!!}</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" >
</head>
 
<body>
    <h1 class="title">{!! __('text.welcome') !!}</h1>
    {!! Form::open(['route' => 'login', 'class' => 'login']) !!}
        {!! Form::email('email', null, ['placeholder' => __('text.email'), 'autofocus']) !!}
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        
        {!! Form::password('password', ['placeholder' => __('text.password'), 'autofocus']) !!}
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        {!! Form::submit(__('text.login'), ['class' => 'submit', 'name' => 'login']) !!}
    {!! Form::close() !!}
</body>
</html>
