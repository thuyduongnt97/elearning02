@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('text.email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('text.verify_resent') }}
                        </div>
                    @endif

                    {{ __('text.verify_note1') }}
                    {{ __('text.verify_note2') }}, <a href="{{ route('verification.resend') }}">{{ __('text.verify_click') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
