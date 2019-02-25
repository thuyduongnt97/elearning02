@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('text.register') }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'register']) !!}
                        @csrf

                        <div class="form-group row">
                            {!! Form::label('name', __('text.name'), ['class' => ['col-md-4', 'col-form-label', 'text-md-right']]) !!}

                            <div class="col-md-6">
                                {!! Form::text('name', ['class' => ['form-control', $errors->has('name') ? ' is-invalid' : ''], 'autofocus']) !!}

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('name', __('text.email'), ['class' => ['col-md-4', 'col-form-label', 'text-md-right']]) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', null, ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'placeholder' => __('text.email'), 'autofocus']) !!}

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', __('text.password'), ['class' => ['col-md-4', 'col-form-label', 'text-md-right']]) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', null, ['class' => ['form-control', $errors->has('password') ? ' is-invalid' : ''], 'placeholder' => __('text.password')]) !!}

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            {!! Form::label('password-confirm', __('text.password_cf'), ['class' => ['col-md-4', 'col-form-label', 'text-md-right']]) !!}

                            <div class="col-md-6">
                                {!! Form::password('password-confirm', null, ['class' => 'form-control', 'placeholder' => __('text.password_cf')]) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(__('text.register'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
