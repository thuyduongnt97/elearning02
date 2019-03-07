@extends('admin.index')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="breadcrumb-holder">
            <h1 class="main-title float-left">{{ __('text.list_question') }}</h1>
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item active"></li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 contents">
        <div class="card-body">
            @if (count($errors) > 0)
            <div id="mess">
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $message)
                    {{ $message }}<br>
                    @endforeach
                </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success" id="mess">
                   {{ session('success') }}
                </div>
            @endif
            <div class="form-group">
                <div class="form-group float-right">
                    <a href="{{ route('add_question') }}" class="btn btn-info pull-right">{{ __('text.add') }}</a>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover display">
                    <thead>
                        <tr>
                            <th>{{ __('text.serial') }}</th>
                            <th class="col-md-2">{{ __('text.content') }}</th>
                            <th>{{ __('text.category') }}</th>
                            <th>{{ __('text.subject') }}</th>
                            <th>{{ __('text.edit') }}</th>
                            <th>{{ __('text.delete') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <input type="hidden" name="" value="{{ $i = 1 }}">
                        @foreach ($question as $ls) 
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $ls->content }}</td>
                            <td>{{ $ls->category }}</td>
                            <td>{{ $ls->subject }}</td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="">{{ __('text.edit') }}</a></td>
                            @if ($ls->soch > 0)
                            <td></td>
                            @else
                            <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="">{{ __('text.delete') }}</a></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
