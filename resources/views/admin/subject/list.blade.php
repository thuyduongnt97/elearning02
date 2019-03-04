@extends('admin.index')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="breadcrumb-holder">
            <h1 class="main-title float-left">{{ __('text.subject') }}</h1>
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
            <div class="row">
            
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">                       
                    <div class="card mb-3">
                        {!! Form::open(['route' => 'add_subject']) !!}
                        <div class="card-body">
                            <div class="form-group">
                                {{ Form::label(null, __('text.name'), ['class' => ['col-md-4', 'col-form-label', 'font-weight-bold']]) }}
                                {!! Form::text('name', null, ['class' => 'form-control', 'data-parsley-trigger' => 'change', 'required' => 'required']) !!}
                            </div>
                            <div class="form-group text-right m-b-0">
                                @if (isset($ma))
                                    {!! Form::submit(__('text.edit'), ['class' => 'btn btn-info']) !!}
                                @else
                                    {!! Form::submit(__('text.add'), ['class' => 'btn btn-info']) !!}
                                @endif
                                {!! Form::submit(__('text.cancel'), ['class' => 'btn btn-secondary m-l-5', 'name' => 'cancel']) !!}
                            </div>
                        </div>  
                        {!! Form::close() !!}                        
                    </div><!-- end card-->                  
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">                       
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-hover display">
                                <thead>
                                    <tr>
                                        <th>{{ __('text.serial') }}</th>
                                        <th>{{ __('text.name') }}</th>
                                        <th>{{ __('text.edit') }}</th>
                                        <th>{{ __('text.delete') }}</th>
                                    </tr>
                                </thead>                                        
                                <tbody>
                                    <input type="hidden" name="" value="{{ $i = 1 }}">
                                    @foreach($getList as $ls) 
                                    <tr>
                                        <td class="center">{{ $i++ }}</td>
                                        <td class="center">{{ $ls->name }}</td>
                                        <td class="center"><a href="{{ route('edit_subject', ['id' => $ls->id]) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil fa-fw"></i></a></td>
                                        @if ($ls->sobg < 0 || $ls->soch < 0 || $ls->sobt < 0)
                                        <td class="center"><a href="{{ route('delete_subject', ['id' => $ls->id]) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o fa-fw"></i></a></td>
                                        @else <td class="center"></td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>                                                      
                    </div><!-- end card-->                  
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
